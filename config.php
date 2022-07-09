<?php

$db_host = "localhost";  //database host
$db_user = "root"; //database user
$db_pass = ""; //database password
$db_name = "test"; //database name

try {
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
}
