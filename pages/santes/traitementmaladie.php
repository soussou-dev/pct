<?php
include 'connectionsante.php';
// ID_MAL	NOM_MAL	LIB_MAL	NBRE_VICTIM_MAL	PERS_VUL_MAL	DATE_DECOUV_MAL

$nommaladie = $_POST['nommaladie'];
$descriptionmaladie= $_POST['descriptionmaladie'];
$victimemaladie= $_POST['victimemaladie'];
$personnevulnérable= $_POST['personnevulnérable'];
$decouvertemaladie= $_POST['decouvertemaladie'];



$sql1= "INSERT INTO maladie (NOM_MAL, LIB_MAL,NBRE_VICTIM_MAL, PERS_VUL_MAL,DATE_DECOUV_MAL) VALUES ('$nommaladie',  '$descriptionmaladie','$victimemaladie',  '$personnevulnérable','$decouvertemaladie')";

$conn->query($sql1);

header('location:AjoutMaladie');

if(
    $conn->query($sql1)==false
){
    echo"voici l'erreur".$conn->error;
}
die($sql1)

?>