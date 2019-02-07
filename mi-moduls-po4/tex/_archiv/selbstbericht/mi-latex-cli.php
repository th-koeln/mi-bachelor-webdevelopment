<?php

/* Functions
############################################################### */

function selbstbericht_schreiben(){

	$pfad_selbstbericht = "../../_selbstbericht/";

	# Dateien sammeln
	$files = preg_grep('~\.(md)$~', scandir($pfad_selbstbericht));

	# ... und Konvertieren
	$buffer = "";

	foreach($files as $file){
		 $temp = shell_exec ("pandoc --chapters --data-dir=../ --template=selbstbericht.latex $pfad_selbstbericht/$file -f markdown -t latex") . "\n\n";

		 print "... $file\n";

		 // PDF umlaute bereinigen
		 $temp = preg_replace("=ü=", "ü", $temp);
		 $temp = preg_replace("=ä=", "ä", $temp);
		 $temp = preg_replace("=ö=", "ö", $temp);

		 $buffer .= $temp;
	}

	# Buffer speichern
	file_put_contents("data.tex", $buffer);
}

/* Main
############################################################### */

// Welche Aktionen gibt es
$options = array();
array_push($options, array("selbstbericht_schreiben", "Selbstbericht generieren"));

// Optionen anzeigen und auswaehlen lassen
$option_count = 1;
foreach($options as $option){
	list($key, $val) = $option;
	print "[". $option_count . "] ". $val . "\n" ;
}
$aktionsid = readline("Was soll gemacht werden? ");

// Funktion aufrufen
list($key, $val) = $options[$aktionsid-1];
call_user_func($key);

?>
