<?php

$name = "hello.txt";

$exists = file_exists($name);

if ($exists) {
  echo file_get_contents($name);
} else {
  echo "file not found";
}

?>
