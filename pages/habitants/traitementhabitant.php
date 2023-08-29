<?php 
include 'connexion.php';

$commune = $_POST['commune'];
$rue= $_POST['rue'];
$quartier= $_POST['quartier'];
$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$datedenaissance= $_POST['datedenaissance'];
$genre= $_POST['genre'];
$profession= $_POST['profession'];
$savoirfaire= $_POST['savoirfaire'];
$contact= $_POST['contact'];

$sql1= "INSERT INTO cartographie (LONG_CART, ALT_CART) VALUES ('$commune', '$rue')";

$sql3= "INSERT INTO habitant (NOM_HAB, PREN_HAB,DATE_NAISS_HAB,SEXE_HAB,PROF_HAB,SAVOIR_FAIRE_HAB,CONT_HAB) VALUES 
('$nom', '$prenom', '$datedenaissance' , '$genre' ,'$profession' ,'$savoirfaire','$contact')";

$cartoid  ="SELECT ID_CART FROM cartographie ORDER BY ID_CART Desc";
$sectid  ="SELECT  ID_SECT FROM secteur ORDER BY ID_SECT Desc";

$conn->query($sql1);
$cartographie= $conn->query($cartoid);
$id =$cartographie->fetch_row();
$sql2= "INSERT INTO secteur(NOM_SECT,ID_CART) VALUES ('$quartier',$id[0]) ";
$conn->query($sql2);
$secteur= $conn->query($sectid);
$idsecteur =$secteur->fetch_row();
$sql3= "INSERT INTO habitant(NOM_HAB, PREN_HAB,DATE_NAISS_HAB,SEXE_HAB,PROF_HAB,SAVOIR_FAIRE_HAB,CONT_HAB,ID_SECT) VALUES 
('$nom', '$prenom', '$datedenaissance' , '$genre' ,'$profession' ,'$savoirfaire','$contact',$idsecteur[0])";
$conn->query($sql3);
header('location:Ajouthabitant.php');
?>