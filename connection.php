<?php
/*
This file is for connection to database with confidencial information in configure.php.
*/

require_once "utils/configure.php";

$conn = new mysqli(server, user, pass, database);

if ($conn->connect_errno) {
  echo "Connection fail...".$conn->connect_error."<br/>";
}else {
  //echo "Successfully connected! <br/>";
}


 ?>
