<?php

$read_text = file_get_contents("read-me.txt");

file_put_contents("append-me.txt", "I love PHP!", FILE_APPEND);
?>
