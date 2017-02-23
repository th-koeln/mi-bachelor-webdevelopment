<?php

namespace HydeMD;

require 'vendors/yaml.php';

define( 'DS', DIRECTORY_SEPARATOR );

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

  private $recipe;

  /**
   * Creating a page for preparation before passing it to pandoc
   *
   * @param array $recipe All infos needed to fetch in all markdown files and processing them
   */
  function __construct( $recipe = array() ) {

    $this->recipe = $recipe;

    if( !isset( $recipe[ 'srcPath' ] ) ) {
      fprintf( STDERR, "\nCan't find the 'srcPath' property in the given recipe!\n\n" );
      die();
    }

    if( !file_exists( $recipe[ 'srcPath' ] ) ) {
      fprintf( STDERR, "\nCan't find file or directory!\n\n" );
      die();
    }

    $this->contentFilename    .= '.' . self::TEXEXT;
    $this->coversheetFilename .= '.' . self::TEXEXT;

    $placeholder = isset( $recipe[ 'placeholder' ] ) &&
                   is_array( $recipe[ 'placeholder' ] )
                    ? $recipe[ 'placeholder' ]:
                      array();

    $this->placeholder = $placeholder;

    $this->path = $recipe[ 'srcPath' ];
    $this->type = is_dir( $this->path ) ? self::DIR: self::FILE;

    /* Extract simple page name */
    $this->name = basename( $this->path );
    $this->name = trim( $this->name, '-_/' );

    /* Preparing the Output-Path */
    $this->outputPath = '.' . DS . 'output' . DS . '_' . $this->name;

    $this->base = (object) array(
      'contentFilename'    => $this->contentFilename,
      'mainFilename'       => $this->name . '.' . self::TEXEXT,
      'coversheetFilename' => $this->coversheetFilename
    );

    $this->fetchFiles();
    $this->loadFileContents();
    $this->parseYAMLHeader();
    /* We now have all the infos needed, to be able to filter files */
    $this->filterFiles();
    $this->fixEmptyTableHeader();
    $this->preprocessMD();
    $this->reorderMDFiles();

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


  private function filterFiles() {

    foreach( $this->files as $path => $page ) {

      switch( $this->getSimpleDocumentName() ) {

        case 'modulbeschreibungen-bachelor':
          if( isset( $page->infos[ 'type' ] ) &&
              $page->infos[ 'type' ] === 'tm' ) {

            unset( $this->files[ $path ] );
          }
          break;

      }

    }
  }


  private function parseYAMLHeader() {
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
            dirname( __FILE__ ) . DS . '../../anhaenge/' . $attrsAssocArr[ 'url' ];

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


      /* Replacing anchor-tags */
      $page->content = preg_replace_callback( '/<\s*a\s*(.*)\s*>(.*)<\s*\/s*a\s*>/',
        function( $matches ) {

          $attrsMatches = array();
          preg_match_all( '/(\w*)=\"(.*?)"/', $matches[1], $attrsMatches );

          $attrsAssocArr = array();

          if( count($attrsMatches) > 0 && count($attrsMatches[1]) > 0 ) {
            for( $i = 0; $i < count( $attrsMatches[1] ); $i++ ) {
              $match = $attrsMatches[1][$i];
              $attrsAssocArr[ trim( $match ) ] = trim( $attrsMatches[2][$i] );
            }
          }

          if( isset( $attrsAssocArr[ 'href' ] ) ) {
            return '[' . $matches[ 2 ] . '](' . $attrsAssocArr[ 'href' ] . ')';
          }

          return $matches[2];
        }, $page->content );


      /* page-specific preprocessing */
      $pageName = $this->getSimpleDocumentName();

      switch( $pageName ) {

        case 'modulbeschreibungen-bachelor':
        case 'modulbeschreibungen-master':

          /* Removing sections without content */
          $lines = array_filter( explode( "\n", $page->content ) );

          $headingHierarchy = parseHierarchy( $lines );
          removeEmptyHeadingSections( $headingHierarchy );
          $cleanedLines = flattenHeadingHierarchy( $headingHierarchy );

          $page->content = implode( "\n", $cleanedLines );


          /* Insert metadata table */

          /* No metadata table for "Schwerpunkte" */
          if( isset( $page->infos[ 'type' ] ) &&
              $page->infos[ 'type' ] === 'sp'    ) {
            break;
          }

          $peopleYamlPath = dirname( __FILE__ ) . DS . '../../_data/people.yml';
          $people = \Spyc::YAMLLoad( $peopleYamlPath );

          $typeMap = array(
            'pm'   => 'Pflichtmodul',
            'vpm'  => 'Vertiefungsmodul',
            'wpm'  => 'Wahlpflichtmodul',
            'spmw' => 'Wahlpflichtmodul',
            'spm'  => 'Schwerpunktmodul',
            'spp'  => 'Schwerpunktprojekt'
          );

          $tableData = array(
            'modulverantwortlich'                   => 'Modulverantwortlich',
            'kuerzel'                               => 'Kürzel',
            'studiensemester'                       => 'Studiensemester',
            'studiensemester-ws'                    => 'Studiensemester - Wintersemester',
            'studiensemester-ss'                    => 'Studiensemester - Sommersemester',
            'sprache'                               => 'Sprache',
            // 'zuordnung-zum-curriculum'              => 'Zuordnung zum Curriculum',
            'kreditpunkte'                          => 'Kreditpunkte',
            'voraussetzungen-nach-pruefungsordnung' => 'Voraussetzungen nach Prüfungsordnung',
            'type'                                  => 'Typ'
          );

          /* Handling 'studiensemester' types */
          $studiensemesterTypes = array( 'studiensemester', 'studiensemester-ws', 'studiensemester-ss' );
          foreach( $studiensemesterTypes as $studiensemesterType ) {
            if( !isset( $page->infos[ $studiensemesterType ] ) ) {
              unset( $tableData[ $studiensemesterType ] );
            }
          }

          foreach( $tableData as $fieldKey => &$fieldValue ) {
            $fieldValue = array(
              'title' => $fieldValue,
              'value' => isset( $page->infos[ $fieldKey ] ) ? $page->infos[ $fieldKey ]: '&nbsp;'
            );
          }

          /* Shorthand symbol mapping */
          $modulverantwortlich = array_map( 'trim', explode( ',', $tableData[ 'modulverantwortlich' ][ 'value' ] ) );

          $modulverantwortlich = array_map( function( $mvKuerzel ) use( $people ) {
            return isset( $people[ $mvKuerzel ][ 'name' ] ) ? $people[ $mvKuerzel ][ 'name' ]: '';
          }, $modulverantwortlich );

          $modulverantwortlich = array_filter( $modulverantwortlich );

          $tableData[ 'modulverantwortlich' ][ 'value' ] = implode( ', ', $modulverantwortlich );

          /* Module type shorthand symbol mapping */
          if( isset( $typeMap[ $tableData[ 'type' ][ 'value' ] ] ) ) {
            $tableData[ 'type' ][ 'value' ] = $typeMap[ $tableData[ 'type' ][ 'value' ] ];
          }

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



  private function reorderMDFiles() {

    switch( $this->getSimpleDocumentName() ) {

      case 'modulbeschreibungen-master':

        $scherpunkteFiles = array();

        foreach( $this->files as $path => $page ) {
          if( isset( $page->infos[ 'type' ] ) &&
              $page->infos[ 'type' ] === 'sp'    ) {
            $scherpunkteFiles[ $path ] = $page;
            unset( $this->files[ $path ] );
          }
        }

        $this->files = $scherpunkteFiles + $this->files;

        break;
    }

  }


  public function getSimpleDocumentName() {
    return $this->name;
  }



  private function getTemplates( $templateBaseDir = '' ) {

    $templateName = $this->getSimpleDocumentName();

    $scriptDir   = dirname( __FILE__ );
    $templateDir = $scriptDir . DS . 'templates';

    $coversheetBasePath = $templateDir . DS . 'coversheet';
    $mainBasePath       = $templateDir;

    $templateFilePaths = array(
      'coversheet' => (object) array(
        'srcBasePath' => $coversheetBasePath,
        'srcPath'     => $coversheetBasePath . DS . $templateName . '.' . self::TEXEXT,
        'destPath'    => $this->outputPath . DS . $this->coversheetFilename,
        'content'     => ''
      ),

      'main'       => (object) array(
        'srcBasePath' => $mainBasePath,
        'srcPath'     => $mainBasePath . DS . $templateName . '.' . self::TEXEXT,
        'destPath'    => $this->outputPath . DS . $this->base->mainFilename,
        'content'     => ''
      )
    );

    foreach( $templateFilePaths as $type => &$template ) {

      $path = $template->srcPath;

      if( !file_exists( $path) ) {
        /* Falling back to the default template */
        $templateName = 'default';
        $path = $template->srcBasePath . DS . $templateName . '.' . self::TEXEXT;

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

    if( !isset( $this->recipe[ 'postprocessLatex' ] ) ) {
      return $latexContent;
    }

    /* Replace instructions */
    if( isset( $this->recipe[ 'postprocessLatex' ][ 'replace' ] ) ) {

      $replaceActionCnt = 0;

      foreach( $this->recipe[ 'postprocessLatex' ][ 'replace' ] as $replaceSet ) {
        if( !is_array( $replaceSet ) && count( $replaceSet ) !== 2 ) {
          fprintf( STDERR, "Skiping replace instruction: Index " . ( $replaceActionCnt + 1 ) );
          continue;
        }

        $latexContent = preg_replace( $replaceSet[0], $replaceSet[1], $latexContent );

        $replaceActionCnt++;
      }

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
    $outputPathContent = $this->outputPath . DS . $this->base->contentFilename;
    file_put_contents( $outputPathContent , $this->latexContent );

    /* Also keeping the md file */
    file_put_contents( $this->outputPath . DS . 'content.md', strval( $this ));

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
  fprintf( STDERR, "\nUsage: php hydeMD.php [Recipe-Name]\n\n\n" );
  die();
}



if( !cmdExists( 'pandoc' )) {
  fprintf( STDERR, "\nPandoc could not be found!" .
                   "Please install Pandoc first and then try again.\n\n" );
  die();
}



$recipeName = $argv[1];
$recipeName = preg_replace( '/\.json\s*$/', '', $recipeName );
$recipePath = dirname( __FILE__ ) . DS . $recipeName . '.json';

if( !file_exists( $recipePath ) ) {
  fprintf( STDERR, "Couldn't find recipe: " . $recipeName . ".json. Exiting now!\n" );
  die();
}

$recipe = file_get_contents( $recipePath );
$recipe = json_decode( $recipe, true );

$doc = new Document( $recipe );

$doc->renderToOutput();

