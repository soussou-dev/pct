<?php 
include 'conection.php';

$titreactualite = $_POST['titreactualite'];
$typeactualite= $_POST['typeactualite'];
$descriptionactualite= $_POST['descriptionactualite'];


$sectid  ="SELECT ID_SECT FROM secteur ORDER BY ID_SECT Desc";

$target_dir = "imageactualite/";//dossier de reception
$target_file = $target_dir . basename($_FILES["imageactualite"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imageactualite"]["tmp_name"]);
  if($check !== false) {
  //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
//renomer l'image
  $temp = explode(".", $_FILES["imageactualite"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$finaldestination = $target_dir. $newfilename;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["imageactualite"]["tmp_name"], "".$finaldestination)) {
     // echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}






$secteur= $conn->query($sectid);
$idsecteur =$secteur->fetch_row();
$sql1= "INSERT INTO actualite (ID_SECT, TITRE_ACT, TYPE_ACT, ENONCEE_ACT, IMAGE_ACT, DATEPOST_ACT) VALUES ($idsecteur[0], '$titreactualite', '$typeactualite', '$descriptionactualite', '$finaldestination', '$date_poste')";
$conn->query($sql1);
header('location:AjoutActualite.php');
// var_dump( $sql1);
?>
