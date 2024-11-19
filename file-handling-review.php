<?php
  file_put_contents("to-do.txt", "Bailey", FILE_APPEND);
  $to_do_file = fopen("to-do.txt", "r");

  $to_do_size = filesize("to-do.txt");
  $contents = fread($to_do_file, $to_do_size);
  echo $contents;

  fclose($to_do_file);
?>
