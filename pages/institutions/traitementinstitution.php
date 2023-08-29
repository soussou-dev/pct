<!-- ID_INST	ID_CART	ID_SECT	NOM_INST	LIB_INST	DESC_INST	CONT_INST -->
<?php 
include 'conection.php';
// commune
// rue
// quartier
// nominstitution
                       
// responsableinstitution
// descriptioninstitution
// contactinstitution

$commune = $_POST['commune'];
$rue= $_POST['rue'];
$quartier= $_POST['quartier'];
$nominstitution= $_POST['nominstitution'];
$responsableinstitution=$_POST['responsableinstitution'];
$descriptioninstitution= $_POST['descriptioninstitution'];
$contactinstitution= $_POST['contactinstitution'];


$sql1= "INSERT INTO cartographie (LONG_CART, ALT_CART) VALUES ('$commune', '$rue')";

$sql3= "INSERT INTO institution (NOM_INST, LIB_INST,DESC_INST, CONT_INST) VALUES 
('$nominstitution', '$responsableinstitution', '$descriptioninstitution' , '$contactinstitution')";

$cartoid  ="SELECT ID_CART FROM cartographie ORDER BY ID_CART Desc";
$sectid  ="SELECT  ID_SECT FROM secteur ORDER BY ID_SECT Desc";

$conn->query($sql1);
$cartographie= $conn->query($cartoid);
$id =$cartographie->fetch_row();
$sql2= "INSERT INTO secteur(NOM_SECT,ID_CART) VALUES ('$quartier',$id[0]) ";
$conn->query($sql2);
$secteur= $conn->query($sectid);
$idsecteur =$secteur->fetch_row();


$sql3= "INSERT INTO institution (NOM_INST, LIB_INST, DESC_INST, CONT_INST, ID_SECT, ID_CART) VALUES 
('$nominstitution', '$responsableinstitution', '$descriptioninstitution', '$contactinstitution', $id[0], $idsecteur[0])";
$conn->query($sql3);
header('location:AjoutInstitution');
if(
    $conn->query($sql3)==false
){
    echo"l'erreur".$conn->error;
}
?>