<?php
  //connexion a la base de données
  include "conection.php";
  //récupération de l'id dans le lien
  $id= $_GET['id'];
  //requête de suppression
  $req =  "DELETE FROM institution WHERE id = $id";
  //redirection vers la page ListeInstitution.php
  // sql to delete a record

if ($conn->query($req) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
//   header("Location:ListeInstitution.php")
?>