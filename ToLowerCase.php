<?php

echo "Inizio\n";
$files = scandir(getcwd());
foreach($files as $file){
	echo "Rinomino: ".$file."\nin: ".strtolower($file)."\n\n";
	rename($file,str_replace(' ','_',strtolower($file)));
}
echo "\nFine";
