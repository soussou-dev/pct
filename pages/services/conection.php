<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetpctg1";
$date_poste = date("Y/m/d");

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
//   echo "ok";
}
?>