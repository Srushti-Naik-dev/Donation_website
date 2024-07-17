<?php

session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "newdonation"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname,3306);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
