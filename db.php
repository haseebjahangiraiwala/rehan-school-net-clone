<?php
$host = "localhost";
$user = "uulevslgtrnau";
$pass = "ld4dy42tkorz";
$dbname = "dbdyr4xgdx5goe";
 
$conn = new mysqli($host, $user, $pass, $dbname);
 
if ($conn->connect_error) {
  die("DB Connection Failed: " . $conn->connect_error);
}
?>
 
