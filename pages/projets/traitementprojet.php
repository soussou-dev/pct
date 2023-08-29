<?php 
include 'conection.php';
// nomprojet
// libelleprojet
// initiateurprojet
// cibleprojet
// debutprojet
// finprojet
// contact

// NOM_PROJET
// LIB_PROJET
// INIT_PROJET
// CYB_PROJET
// PERIODE_DEB_PROJET
// PERIODE_FIN_PROJET
// CONT_POUR_PROJET

$nomprojet = $_POST['nomprojet'];
$libelleprojet= $_POST['libelleprojet'];
$initiateurprojet= $_POST['initiateurprojet'];
$cibleprojet= $_POST['cibleprojet'];
$debutprojet=$_POST['debutprojet'];
$finprojet= $_POST['finprojet'];
$contact= $_POST['contact'];

$sql1= "INSERT INTO  projet(NOM_PROJET, LIB_PROJET,INIT_PROJET,CYB_PROJET,PERIODE_DEB_PROJET,PERIODE_FIN_PROJET,CONT_POUR_PROJET) VALUES 
('$nomprojet', '$libelleprojet', '$initiateurprojet' , '$cibleprojet' ,'$debutprojet' ,'$finprojet','$contact')";
$conn->query($sql1);
header('location:AjoutProjet');
?>