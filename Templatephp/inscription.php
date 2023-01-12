<?php
include 'db.php'; 
error_reporting(0);
session_start();



if (isset($_POST['enregistrer'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
 

  $sql = "INSERT INTO users_info (nom, prenom,age) VALUES ('$nom','$prenom','$age')"; 
  $resulst = mysqli_query($conn, $sql);
}
?>