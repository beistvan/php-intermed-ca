<?php

$languages = array("HTML", "CSS", "JavaScript", "PHP", "SQL");
$file_name = "languages.txt";

// open file in write mode
$file = fopen($file_name, "w");

// write languages to file
foreach ($languages as $language) {
    fwrite($file, "- $language\n");
}

// close file and re-open in read mode
fclose($file);
$file = fopen($file_name, "r");

// print contents of file
$size = filesize($file_name);
$contents = fread($file, $size);
echo $contents;

// close file
fclose($file);
?>
