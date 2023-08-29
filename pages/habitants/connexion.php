<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pctg03";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  //  echo "ok";
}
?>
<!-- commune
rue
quartier
nom
prenom
datedenaissance
genre
profession
savoirfaire
save_habitant -->