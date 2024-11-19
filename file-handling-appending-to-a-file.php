<?php

    $pets_file = fopen("cool-pets.txt", "a");

    fwrite($pets_file, "Lessie\n");

    fclose($pets_file);
?>
