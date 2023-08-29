<?php
include 'connectionsante.php';
// ID_CENTRE_SANTE	ID_CART	ID_SECT	NOM_CENTRE_SANTE	ASSUR_CENTRE_SANTE	TYPE_CENTRE_SANTE	LIB_CENTRE_SANTE	CONT_CENTRE_SANTE	 
// nomcentre
// assurance
// typecentre
// contactcentre
$commune = $_POST['commune'];
$rue= $_POST['rue'];
$quartier= $_POST['quartier'];
$nomcentre = $_POST['nomcentre'];
$assurance= $_POST['assurance'];
$typecentre= $_POST['typecentre'];
$contactcentre= $_POST['contactcentre'];



$sql1= "INSERT INTO cartographie (LONG_CART, ALT_CART) VALUES ('$commune', '$rue')";

$sql3= "INSERT INTO centre_de_sante (NOM_CENTRE_SANTE, ASSUR_CENTRE_SANTE, TYPE_CENTRE_SANTE, CONT_CENTRE_SANTE) VALUES ('$nomcentre','$assurance','$typecentre','$contactcentre')";

$cartoid  ="SELECT ID_CART FROM cartographie ORDER BY ID_CART Desc";
$sectid  ="SELECT  ID_SECT FROM secteur ORDER BY ID_SECT Desc";
$conn->query($sql1);
$cartographie= $conn->query($cartoid);
$id =$cartographie->fetch_row();
$sql2= "INSERT INTO secteur(NOM_SECT,ID_CART) VALUES ('$quartier',$id[0]) ";
$conn->query($sql2);
$secteur= $conn->query($sectid);
$idsecteur =$secteur->fetch_row();
$sql3= "INSERT INTO centre_de_sante (NOM_CENTRE_SANTE, ASSUR_CENTRE_SANTE, TYPE_CENTRE_SANTE, CONT_CENTRE_SANTE, ID_SECT, ID_CART) VALUES 
('$nomcentre','$assurance','$typecentre','$contactcentre', $id[0], $idsecteur[0])";
$conn->query($sql3);
header('location:AjoutCentre');
?>