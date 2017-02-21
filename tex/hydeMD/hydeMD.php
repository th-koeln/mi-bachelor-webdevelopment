<?php

namespace HydeMD;

class Page {

  const FILE = 'FILE';
  const DIR  = 'DIR';

  private $type;
  private $path;
  private $name;
  private $files = array();

  /**
   * Creating a page for preparation before passing it to pandoc
   *
   * @param string $path Path to a markdown file or a directory containing markdown files
   */
  function __construct( $path = '.' ) {

    if( !file_exists( $path ) ) {
      fprintf( STDERR, "\nCan't find file or directory!\n\n" );
      die();
    }

    $this->path = $path;
    $this->type = is_dir( $this->path ) ? self::DIR: self::FILE;

    $this->fetchFiles();
    $this->loadFileContents();
    $this->replaceYAMLHeaderInFiles();
    $this->fixEmptyTableHeader();

    /* Extract simple page name */
    $this->name = basename( $this->path );
    $this->name = trim( $this->name, '-_/' );
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

        $this->files[$path] = '';
      }
    }
  }


  private function loadFileContents() {
    foreach( $this->files as $path => &$content ) {
      $content = file_get_contents( $path );

      $content = preg_replace( "=ü=", "ü", $content );
      $content = preg_replace( "=Ü=", "Ü", $content );

      $content = preg_replace( "=ä=", "ä", $content );
      $content = preg_replace( "=Ä=", "Ä", $content );

      $content = preg_replace( "=ö=", "ö", $content );
      $content = preg_replace( "=Ö=", "Ö", $content );

      $content = preg_replace( "=‐=", "-", $content );

    }
  }


  private function replaceYAMLHeaderInFiles() {
    foreach( $this->files as $path => &$content ) {
      $firstReplacement = true;

      $content = preg_replace_callback( '/---\s*(.*?)\s*---/is', function( $matches ) use($firstReplacement) {

        if( ! $firstReplacement )
          return $matches[0];

        $firstReplacement = false;

        $pairsAssocArr = array();

        $pairs = explode( "\n", $matches[1] );

        $pairs = array_filter( $pairs );

        foreach( $pairs as $pair ) {
          $pair = array_map( "trim", explode( ":", $pair ) );

          if( !isset( $pair[1] ) ) {
            $pair[1] = '';
          }

          $pairsAssocArr[ $pair[0] ] = $pair[1];
        }

        if( !isset( $pairsAssocArr[ 'title' ] ) ) {
          return $matches[0];
        }

        return '# ' . $pairsAssocArr[ 'title' ];
      }, $content );
    }
  }


  private function fixEmptyTableHeader() {
    foreach( $this->files as $path => &$content ) {
      $content = preg_replace( '/\| +?\|/i', '| &nbsp; |', $content );
    }
  }


  public function getSimplePageName() {
    return $this->name;
  }


  public function __toString() {
    return implode( array_values( $this->files ), "\n\n" );
  }

}



if( isset( $argv ) && count( $argv ) === 1) {
  fprintf( STDERR, "\nUsage: php hydeMD.php [Input] [Title]\n\n\n" );
  die();
}


$whichRetVal = 1;
$whichOutput = array();
exec( 'which pandoc', $whichOutput, $whichRetVal );

if( $whichRetVal === 1 ) {
  fprintf( STDERR, "\nPandoc could not be found!" .
                   "Please install Pandoc first and then try again.\n\n" );
  die();
}


$placeholder = array(
  'title' => ''
);

if( isset( $argv ) && count( $argv ) > 2 ) {
  $placeholder[ 'title' ] = $argv[2];
}


$page = new Page( $argv[1] );

$outputPath        = null;
$basenameContent   = 'content.tex';
$basenameMain      = 'main.tex';

/* Preparing the Output-Path */
$outputPath = '.' . DIRECTORY_SEPARATOR . 'output' . DIRECTORY_SEPARATOR . '_' . $page->getSimplePageName();

if( !file_exists( $outputPath) )
  mkdir( $outputPath, 0777, true );

$basenameMain = $page->getSimplePageName() . '.tex';

$outputPathContent = $outputPath . DIRECTORY_SEPARATOR . $basenameContent;
$outputPathMain    = $outputPath . DIRECTORY_SEPARATOR . $basenameMain;


/* Creating a temporary file with all found and merged markdown files */
$tmpPageMDFile = tempnam( sys_get_temp_dir(), $page->getSimplePageName() . 'MD' );
file_put_contents( $tmpPageMDFile , strval( $page ) );

/* Using Pandoc to transform the temporary markdown to latex */
$pandocOutput = shell_exec( "pandoc " . $tmpPageMDFile . " -f markdown -t latex" );


/* TODO: Clean up ugly hack */
$pandocOutput = str_replace( '\section', '\chapter', $pandocOutput );
$pandocOutput = str_replace( '\subsection', '\section', $pandocOutput );
$pandocOutput = str_replace( '\subsubsection', '\subsection', $pandocOutput );

$pandocOutput = str_replace( '{0.07\columnwidth}', '{0.5\columnwidth}', $pandocOutput );
$pandocOutput = str_replace( '{0.06\columnwidth}', '{0.33\columnwidth}', $pandocOutput );


if( is_null( $outputPath ) ) {
  echo $pandocOutput;
}
else {
  file_put_contents( $outputPathContent, $pandocOutput);

  $templateName = explode( '.', $basenameMain )[0];

  $scriptDir   = dirname( __FILE__ );
  $templateDir = $scriptDir . DIRECTORY_SEPARATOR . 'templates';
  $templatePath = $templateDir . DIRECTORY_SEPARATOR . $templateName . '.tex';

  if( !file_exists( $templatePath ) ) {
    /* Falling back to the default template */
    $templateName = 'default';
    $templatePath = $templateDir . DIRECTORY_SEPARATOR . $templateName . '.tex';

    if( !file_exists( $templatePath ) ) {
      fprintf( STDERR, "Couldn't find the default template! Exiting now!" );
      die();
    }
  }

  $templateContent = file_get_contents( $templatePath );

  $templateContent = preg_replace_callback( '/\<\|\s*(.*?)\s*\|\>/', function( $matches ) use($placeholder) {
    return isset( $placeholder[ $matches[1] ] ) ? $placeholder[ $matches[1] ]: '';
  }, $templateContent );

  file_put_contents( $outputPathMain , $templateContent );

  file_put_contents( $outputPath . DIRECTORY_SEPARATOR . 'content.md', strval( $page ));
}

