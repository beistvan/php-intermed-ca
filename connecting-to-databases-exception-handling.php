<?php

// Assign database variables
$hostname = '/tmp';
$dbname = 'ccuser';
$username = 'ccuser';
$password = 'pass';
   
// Fill in the $dsn here
$dsn = "pgsql:host=$hostname;dbname=$dbname";

// Add a try/catch block around this statement
try {
  $db = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
