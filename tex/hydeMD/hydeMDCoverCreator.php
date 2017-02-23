<?php

define( 'DS', DIRECTORY_SEPARATOR );





if( count( $argv ) === 1) {
  fprintf( STDOUT, "php hydeMDCoverCreator.php [TEX-TEMPLATE] " .
                        "[PLACEHOLDER, ... \"key1=val1;key2=val2]\"\n\n" );

  die();
}


$baseTemplatePath = dirname( __FILE__ ) . DS . '/templates/_coversheet.tex';
$baseTemplateContent = file_get_contents( $baseTemplatePath );

$templateBase    = dirname( __FILE__ ) . DS . '/templates/coversheet';
$templateDefault = 'default.tex';

$templatePath = $templateBase . DS . $templateDefault;


if( count( $argv ) > 1 ) {
  $templatePath = $templateBase . DS . $argv[1];
}

if( !file_exists( $templatePath ) ) {
  fprintf( STDERR, "Couldn't find template: " . $templatePath . "\n\n");
  die();
}


$placeholders = array();

if( count( $argv ) > 2 ) {
  $passedPlaceholders = $argv[2];

  $passedPlaceholders = array_filter( explode( ';', $passedPlaceholders ) );

  $passedPlaceholders = array_map( function( $placeholderStr ) {
    return array_map( 'trim', explode( '=', $placeholderStr ) );
  }, $passedPlaceholders );

  foreach( $passedPlaceholders as $placeholder ) {

    if( !isset( $placeholder[1] ) ) {
      $placeholder[1] = '';
    }

    if( empty( $placeholder[0]) || empty( $placeholder[1] ) ) {
      continue;
    }

    $key = $placeholder[0];
    $val = $placeholder[1];

    $placeholders[ $key ] = $val;
  }
}


$coversheetContent = file_get_contents( $templatePath );
$coversheetContent = str_replace( '../../../assets', '../../../../assets', $coversheetContent );

$baseTemplateContent = preg_replace( '/\<\|\s*_coversheetContent\s*\|\>/',
                                     $coversheetContent,
                                     $baseTemplateContent );


$baseTemplateContent = preg_replace_callback( '/\<\|\s*(.*?)\s*\|\>/',
                        function( $matches ) use( $placeholders ) {
                          return isset( $placeholders[ $matches[1] ] ) ? $placeholders[ $matches[1] ]: '';
                        }, $baseTemplateContent );


$title = isset( $placeholders[ 'title' ] ) ?
            str_replace( '/[\s-]*/', '', strtolower( $placeholders[ 'title' ] )):
            'default';

$outputDirPath = dirname( __FILE__ ) . DS .'/output/_coversheets/' . $title;

if( !file_exists( $outputDirPath ) ) {
  mkdir( $outputDirPath, 0777, true );
}

$outputFilePath = $outputDirPath . DS . $title . '.tex';

file_put_contents( $outputFilePath , $baseTemplateContent );
