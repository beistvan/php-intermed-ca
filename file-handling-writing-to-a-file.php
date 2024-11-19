<?php

  $bands_file = fopen("my-bands.txt", "w");

  fwrite($bands_file, "Queen\n");

  fclose($bands_file);
?>
