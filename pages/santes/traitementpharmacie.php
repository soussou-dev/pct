<?php
include 'connectionsante.php';
// ID_PHAR	ID_SECT	ID_CART	NOM_PHAR	LIB_PHAR	ASSUR_PHAR	CONT_PHAR


// situationgeographique
// communepharmacie
// nompharmacie
// assurancepharmacie
// contactpharmacie
// communepharmacie
// quartierpharmacie
// ruepharmacie
$communepharmacie = $_POST['communepharmacie'];
$quartierpharmacie= $_POST['quartierpharmacie'];
$ruepharmacie= $_POST['ruepharmacie'];
$nompharmacie= $_POST['nompharmacie'];
$assurancepharmacie= $_POST['assurancepharmacie'];
$contactpharmacie=$_POST['contactpharmacie'];


$sql1= "INSERT INTO cartographie (LONG_CART, ALT_CART) VALUES ('$communepharmacie',  '$quartierpharmacie')";

$sql3= "INSERT INTO pharmacie (NOM_PHAR, ASSUR_PHAR, CONT_PHAR) VALUES 
('$nompharmacie', '$assurancepharmacie', '$contactpharmacie')";

$cartoid  ="SELECT ID_CART FROM cartographie ORDER BY ID_CART Desc";
$sectid  ="SELECT  ID_SECT FROM secteur ORDER BY ID_SECT Desc";

$conn->query($sql1);
$cartographie= $conn->query($cartoid);
$id =$cartographie->fetch_row();
$sql2= "INSERT INTO secteur(NOM_SECT,ID_CART) VALUES ('$ruepharmacie',$id[0]) ";
$conn->query($sql2);
$secteur= $conn->query($sectid);
$idsecteur =$secteur->fetch_row();
$sql3= "INSERT INTO pharmacie (NOM_PHAR, ASSUR_PHAR, CONT_PHAR, ID_SECT, ID_CART) VALUES 
('$nompharmacie', '$assurancepharmacie', '$contactpharmacie', $id[0], $idsecteur[0])";
header('location:AjoutPharmacie');

if(
    $conn->query($sql3)==false
){
    echo"l'erreur".$conn->error;
}
// die($sql3)
?>