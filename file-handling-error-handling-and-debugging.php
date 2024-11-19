<?php

$home = file_get_contents("home.html");

if ($home == false) {
    echo "File not found";
} else {
    echo $home;
}

?>
