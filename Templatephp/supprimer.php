<?php
  //connexion a la base de données

$server = 'localhost'; 
$username ='root'; 
$passw ='root'; 
$database ='Base1'; 

$conn = mysqli_connect($server, $username, $passw, $database); 

if(!$conn){
   die('error');
}


  //récupération de l'id dans le lien
  
  

  //requête de suppression
  DELETE FROM `utilisateur`
  WHERE `id` = 1
  //redirection vers la page index.php
 
  header("refresh:0");

  ?>
  
