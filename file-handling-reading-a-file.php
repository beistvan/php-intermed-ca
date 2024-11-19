<?php
  $welcome_file = fopen("welcome.txt", "r");

  $size = filesize("welcome.txt");
  
  $welcome_text = fread($welcome_file, $size);
  echo $welcome_text;

  fclose($welcome_file);
?>
