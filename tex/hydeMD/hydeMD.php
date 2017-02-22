<?php

namespace HydeMD;

require 'vendors/yaml.php';


/* Helper functions */
function cmdExists( $cmd ) {
  $whichRetVal = 1;
  $whichOutput = array();
  exec( 'which ' . $cmd, $whichOutput, $whichRetVal );

  return $whichRetVal === 0;
}


function expandHeadingHierarchy( &$headings, $currHeadingHierarchyLine, $item = null ) {

  if( count( $currHeadingHierarchyLine) === 0 ) {
    if( !is_null( $item ) ) {
      $headings[ 'lines' ][] = $item;
    }
    return;
  }

  $heading = array_shift( $currHeadingHierarchyLine );

  if( !isset( $headings[ 'sub' ][ $heading ] ) ) {
    $headings[ 'sub' ][ $heading ] = array(
      'sub'   => array(),
      'lines' => array()
    );
  }

  expandHeadingHierarchy( $headings[ 'sub' ][ $heading ], $currHeadingHierarchyLine, $item );

}


function removeEmptyHeadingSections( &$headings ) {

  $cnt = 0;

  foreach( $headings[ 'sub' ] as $heading => &$headingInfo ) {
    $childCnt = removeEmptyHeadingSections( $headingInfo );

    if( $childCnt === 0 ) {
      unset( $headings[ 'sub' ][ $heading ] );
    }

    $cnt += $childCnt;
  }

  $cnt += count( $headings[ 'lines' ] );

  return $cnt;
}


function flattenHeadingHierarchy( $headings ) {

  $lines = array();

  foreach( $headings[ 'sub' ] as $heading => $headingInfo ) {
    $lines[] = "\n" . $heading . "\n";

    $headingLines = flattenHeadingHierarchy( $headingInfo );

    $lines = array_merge( $lines, $headingLines );
  }

  $headings[ 'lines' ] = array_map( function( $item ) {
    return $item . "\n";
  }, $headings[ 'lines' ] );

  $lines = array_merge( $lines, $headings[ 'lines' ] );

  return $lines;
}


function parseHierarchy( $lines ) {

  $headings = array(
    'sub'   => array(),
    'lines' => array()
  );
  $currHeadingHierarchyLine = array();

  foreach( $lines as $line ) {

    $match = array();

    if( preg_match( '/^\s*(#+?)(?!#)(.*)/', $line , $match ) ) {
      $currLvl     = strlen( $match[1] );
      $currHeading = trim( $match[0] );

      $currHeadingHierarchyLine = array_slice( $currHeadingHierarchyLine, 0, $currLvl - 1 );

      $currHeadingHierarchyLine[] = $currHeading;

      expandHeadingHierarchy( $headings, $currHeadingHierarchyLine );

    }
    else {
      expandHeadingHierarchy( $headings, $currHeadingHierarchyLine, $line );
    }
  }

  return $headings;

}




class Document {

  const FILE = 'FILE';
  const DIR  = 'DIR';

  const TEXEXT = 'tex';

  private $contentFilename    = 'content';
  private $coversheetFilename = 'coversheet';

  private $type;
  private $path;
  private $name;
  private $base;
  private $placeholder;
  private $outputPath;
  private $latexContent = null;
  private $files        = array();

  /**
   * Creating a page for preparation before passing it to pandoc
   *
   * @param string $path Path to a markdown file or a directory containing markdown files
   * @param array  $placeholder     Array with placeholder values
   */
  function __construct( $path            = '.',
                        $placeholder     = array() ) {

    if( !file_exists( $path ) ) {
      fprintf( STDERR, "\nCan't find file or directory!\n\n" );
      die();
    }

    $this->contentFilename    .= '.' . self::TEXEXT;
    $this->coversheetFilename .= '.' . self::TEXEXT;

    $this->placeholder = $placeholder;

    $this->path = $path;
    $this->type = is_dir( $this->path ) ? self::DIR: self::FILE;

    /* Extract simple page name */
    $this->name = basename( $this->path );
    $this->name = trim( $this->name, '-_/' );

    /* Preparing the Output-Path */
    $this->outputPath = '.' . DIRECTORY_SEPARATOR . 'output' . DIRECTORY_SEPARATOR . '_' . $this->name;

    $this->base = (object) array(
      'contentFilename'    => $this->contentFilename,
      'mainFilename'       => $this->name . '.' . self::TEXEXT,
      'coversheetFilename' => $this->coversheetFilename
    );

    $this->fetchFiles();
    $this->loadFileContents();
    $this->replaceYAMLHeaderInFiles();
    $this->fixEmptyTableHeader();
    $this->preprocessMD();

    $this->transpileToLatex();
  }


  private function fetchFiles() {
    if( $this->type === self::FILE ) {
      $this->files[ $this->path ] = '';
    }
    else {
      $recursiveDirIter  = new \RecursiveDirectoryIterator( $this->path );
      $recursiveIterIter = new \RecursiveIteratorIterator($recursiveDirIter);
      $matchingFiles     = new \RegexIterator( $recursiveIterIter, '/^.+\.md$/i',
                                               \RecursiveRegexIterator::GET_MATCH );

      foreach( $matchingFiles as $path => $obj ) {

        if( strpos( $path, '_archiv/' ) !== FALSE ) {
          continue;
        }

        $this->files[$path] = (object) array(
          'content' => '',
          'infos'   => array()
        );
      }
    }
  }



  private function loadFileContents() {
    foreach( $this->files as $path => &$page ) {
      $page->content = file_get_contents( $path );

      $page->content = preg_replace( "=ü=", "ü", $page->content );
      $page->content = preg_replace( "=Ü=", "Ü", $page->content );

      $page->content = preg_replace( "=ä=", "ä", $page->content );
      $page->content = preg_replace( "=Ä=", "Ä", $page->content );

      $page->content = preg_replace( "=ö=", "ö", $page->content );
      $page->content = preg_replace( "=Ö=", "Ö", $page->content );

      $page->content = preg_replace( "=‐=", "-", $page->content );
    }
  }



  private function replaceYAMLHeaderInFiles() {
    foreach( $this->files as $path => &$page ) {

      $firstReplacement = true;

      $page->content = preg_replace_callback( '/---\s*(.*?)\s*---/is', function( $matches ) use($firstReplacement, $page) {

        if( ! $firstReplacement )
          return $matches[0];

        $firstReplacement = false;

        $yamlContent = \Spyc::YAMLLoadString( $matches[0] );

        $keys = array_filter( array_keys( $yamlContent ), function($item) {
          return is_string( $item );
        } );

        $pairs = array_intersect_key( $yamlContent, array_flip( $keys ) );

        $page->infos = $pairs;


        if( !isset( $page->infos[ 'title' ] ) ) {
          return $matches[0];
        }

        return '# ' . $page->infos[ 'title' ];
      }, $page->content );
    }
  }



  private function fixEmptyTableHeader() {
    foreach( $this->files as $path => &$page ) {
      $page->content = preg_replace( '/\| +?\|/i', '| &nbsp; |', $page->content );
    }
  }



  private function preprocessMD() {

    $svgsFound = false;

    foreach( $this->files as $path => &$page ) {

      $page->content = preg_replace_callback( '/{%\s*include\s*(.*?)\s*%}/i',
                                              function($matches) use( &$svgsFound ) {

        $rawAttributes = $matches[1];

        $attrsMatches = array();
        preg_match_all( '/(\w*)=\"(.*?)"/', $rawAttributes, $attrsMatches );


        $attrsAssocArr = array();

        if( count($attrsMatches) > 0 && count($attrsMatches[1]) > 0 ) {
          for( $i = 0; $i < count( $attrsMatches[1] ); $i++ ) {
            $match = $attrsMatches[1][$i];
            $attrsAssocArr[ trim( $match ) ] = trim( $attrsMatches[2][$i] );
          }
        }

        /* TODO: handling of special cases */

        if( count( $attrsAssocArr ) === 0 ) {
          return $matches[0];
        }

        if( !isset( $attrsAssocArr[ 'url' ] ) ) {
          return '';
        }
        else {

          $relativePathToFileFromScript =
            dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../anhaenge/' . $attrsAssocArr[ 'url' ];

          if( !file_exists( $relativePathToFileFromScript ) ) {
            /* File was not found, so we are gonna output a warning and skip it */
            fprint( STDERR, "Included file was not found: " . $attrsAssocArr[ 'url' ] );

            return '';
          }

          /* path correction -> relative path starting from the content file */
          $attrsAssocArr[ 'url' ] = '../anhaenge/' . $attrsAssocArr[ 'url' ];

          /* SVG to PDF conversion if a SVG file is found */
          $attrsAssocArr[ 'url' ] = preg_replace_callback( '/\.svg$/', function($match) use( &$svgsFound, $relativePathToFileFromScript, $attrsAssocArr ) {

            $newExt = $match[0];

            if( cmdExists( 'rsvg-convert' ) ) {
              $relativePathToFileFromScriptPDF =
                preg_replace( '/.svg$/', '.pdf', $relativePathToFileFromScript );

              if( !file_exists( $relativePathToFileFromScriptPDF ) ) {
                shell_exec( 'rsvg-convert -f pdf -o ' .
                            $relativePathToFileFromScriptPDF . ' ' .
                            $relativePathToFileFromScript );
              }

              $newExt = '.pdf';
            }
            else {
              fprintf( STDERR, "Warning: SVG file found: " . $attrsAssocArr[ 'url' ] . "\n" );
              $svgsFound = true;
            }

            return $newExt;
          }, $attrsAssocArr[ 'url' ] );
        }

        if( !isset( $attrsAssocArr[ 'caption' ] ) ) {
          $attrsAssocArr[ 'caption' ] = '';
        }

        return '![' . $attrsAssocArr[ 'caption' ] . '](' . $attrsAssocArr[ 'url' ] . ')';
      }, $page->content );



      /* page-specific preprocessing */
      $pageName = $this->getSimpleDocumentName();

      switch( $pageName ) {

        case 'modulbeschreibungen-bachelor':

          /* Removing sections without content */
          $lines = array_filter( explode( "\n", $page->content ) );

          $headingHierarchy = parseHierarchy( $lines );
          removeEmptyHeadingSections( $headingHierarchy );
          $cleanedLines = flattenHeadingHierarchy( $headingHierarchy );

          $page->content = implode( "\n", $cleanedLines );



          /* Insert metadata table */

          $peopleYamlPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../../_data/people.yml';
          $people = \Spyc::YAMLLoad( $peopleYamlPath );

          $tableData = array(
            'modulverantwortlich'                   => 'Modulverantwortlich',
            'kuerzel'                               => 'Kürzel',
            'studiensemester'                       => 'Studiensemester',
            'sprache'                               => 'Sprache',
            'zuordnung-zum-curriculum'              => 'Zuordnung zum Curriculum',
            'kreditpunkte'                          => 'Kreditpunkte',
            'voraussetzungen-nach-pruefungsordnung' => 'Voraussetzungen nach Prüfungsordnung'
          );

          foreach( $tableData as $fieldKey => &$fieldValue ) {
            $fieldValue = array(
              'title' => $fieldValue,
              'value' => isset( $page->infos[ $fieldKey ] ) ? $page->infos[ $fieldKey ]: '&nbsp;'
            );
          }

          $modulverantwortlich = array_map( 'trim', explode( ',', $tableData['modulverantwortlich']['value'] ) );

          $modulverantwortlich = array_map( function( $mvKuerzel ) use( $people ) {
            return $people[ $mvKuerzel ][ 'name' ];
          }, $modulverantwortlich );


          $tableData['modulverantwortlich']['value'] = implode( ', ', $modulverantwortlich );


          $tableMarkdown  = "| &nbsp; | &nbsp; |\n";
          $tableMarkdown .= "|:-------|:-------|\n";

          foreach( $tableData as $key => $field ) {
            $tableMarkdown .= "| " . $field[ 'title' ] . " | " . $field[ 'value' ] . " |\n";
          }

          $page->content = preg_replace( '/^\s*#(.*?)\n/', "$0\n\n" . $tableMarkdown, $page->content );

          break;
      }

    }

    if( $svgsFound ) {
      fprintf( STDERR, "Please install librsvg for on-the-fly svg2pdf conversion." );
    }
  }



  public function getSimpleDocumentName() {
    return $this->name;
  }



  private function getTemplates( $templateBaseDir = '' ) {

    $templateName = $this->getSimpleDocumentName();

    $scriptDir   = dirname( __FILE__ );
    $templateDir = $scriptDir . DIRECTORY_SEPARATOR . 'templates';

    $coversheetBasePath = $templateDir . DIRECTORY_SEPARATOR . 'coversheet';
    $mainBasePath       = $templateDir;

    $templateFilePaths = array(
      'coversheet' => (object) array(
        'srcBasePath' => $coversheetBasePath,
        'srcPath'     => $coversheetBasePath . DIRECTORY_SEPARATOR . $templateName . '.' . self::TEXEXT,
        'destPath'    => $this->outputPath . DIRECTORY_SEPARATOR . $this->coversheetFilename,
        'content'     => ''
      ),

      'main'       => (object) array(
        'srcBasePath' => $mainBasePath,
        'srcPath'     => $mainBasePath . DIRECTORY_SEPARATOR . $templateName . '.' . self::TEXEXT,
        'destPath'    => $this->outputPath . DIRECTORY_SEPARATOR . $this->base->mainFilename,
        'content'     => ''
      )
    );

    foreach( $templateFilePaths as $type => &$template ) {

      $path = $template->srcPath;

      if( !file_exists( $path) ) {
        /* Falling back to the default template */
        $templateName = 'default';
        $path = $template->srcBasePath . DIRECTORY_SEPARATOR . $templateName . '.' . self::TEXEXT;

        if( !file_exists( $path ) ) {
          fprintf( STDERR, "Couldn't find the default template! Exiting now!" );
          die();
        }
      }

      $template->srcPath = $path;
      $template->content = file_get_contents( $template->srcPath );

      $template->content = $this->interpolatePlaceholders( $template->content );

    }

    return $templateFilePaths;
  }



  public function transpileToLatex() {

    if( !is_null( $this->latexContent ) )
      return;

    /* Creating a temporary file with all found and merged markdown files */
    $tmpDocumentMDFile = tempnam( sys_get_temp_dir(), $this->getSimpleDocumentName() . 'MD' );
    file_put_contents( $tmpDocumentMDFile , strval( $this ) );

    /* Using Pandoc to transform the temporary markdown to latex */
    $pandocOutput = shell_exec( 'pandoc ' . $tmpDocumentMDFile . ' -f markdown -t latex' );

    $this->latexContent = $this->postprocessLatex( $pandocOutput );
  }



  private function postprocessLatex( $latexContent ) {

    $pageName = $this->getSimpleDocumentName();

    switch( $pageName ) {
      case 'selbstbericht':

        $latexContent = str_replace( '\section', '\chapter', $latexContent );
        $latexContent = str_replace( '\subsection', '\section', $latexContent );
        $latexContent = str_replace( '\subsubsection', '\subsection', $latexContent );

        $latexContent = str_replace( '{0.07\columnwidth}', '{0.5\columnwidth}', $latexContent );
        $latexContent = str_replace( '{0.06\columnwidth}', '{0.33\columnwidth}', $latexContent );


        $latexContent = preg_replace( '/begin{figure}/', 'begin{figure}[htbp]', $latexContent );
        $latexContent = preg_replace( '/includegraphics/', 'includegraphics[width=\columnwidth]', $latexContent );

        break;

      case 'modulbeschreibungen-bachelor':

        $latexContent = str_replace( '\section', '\chapter', $latexContent );
        $latexContent = str_replace( '\subsection', '\section*', $latexContent );
        $latexContent = str_replace( '\subsubsection', '\subsection*', $latexContent );

        break;
    }

    return $latexContent;
  }



  public function renderToOutput() {

    if( !file_exists( $this->outputPath ) )
      mkdir( $this->outputPath, 0777, true );

    $pageTemplates = $this->getTemplates();

    foreach( $pageTemplates as $type => $template ) {
      file_put_contents( $template->destPath, $template->content );
    }

    /* Creating the content latex file */
    $outputPathContent = $this->outputPath . DIRECTORY_SEPARATOR . $this->base->contentFilename;
    file_put_contents( $outputPathContent , $this->latexContent );

    /* Also keeping the md file */
    file_put_contents( $this->outputPath . DIRECTORY_SEPARATOR . 'content.md', strval( $this ));

  }



  private function interpolatePlaceholders( $content ) {

    $placeholder = $this->placeholder;

    $content = preg_replace_callback( '/\<\|\s*(.*?)\s*\|\>/', function( $matches ) use($placeholder) {
      return isset( $placeholder[ $matches[1] ] ) ? $placeholder[ $matches[1] ]: '';
    }, $content );

    return $content;
  }



  public function __toString() {
    return implode( array_map( function($page) {
                      return $page->content;
                    }, $this->files ),
                    "\n\n" );
  }

}



if( isset( $argv ) && count( $argv ) === 1 ) {
  fprintf( STDERR, "\nUsage: php hydeMD.php [Input] [Placeholder: key1:var1;key2:var2;...]\n\n\n" );
  die();
}



if( !cmdExists( 'pandoc' )) {
  fprintf( STDERR, "\nPandoc could not be found!" .
                   "Please install Pandoc first and then try again.\n\n" );
  die();
}


/* TODO: Introducing support for recipe-Files, with better conversion instructions */



/* Preparing placeholders */
$placeholder = array(
  'title' => ''
);

if( isset( $argv ) && count( $argv ) > 2 ) {

  $passedPlaceholders = explode( '#', $argv[2] );
  $passedPlaceholders = array_map( function($pair) {
    return array_map( 'trim', explode( ':', $pair ) );
  }, $passedPlaceholders );

  foreach( $passedPlaceholders as $passedPlaceholder ) {
    if( count( $passedPlaceholder ) === 2 ) {
      $placeholder[ $passedPlaceholder[0] ] = $passedPlaceholder[1];
    }
  }

}


$doc = new Document( $argv[1], $placeholder );

$doc->renderToOutput();

