<?php
  //connexion
  
  $server = 'localhost'; 
  $username ='root'; 
  $passw ='root'; 
  $database ='Base1'; 
  
  $conn = mysqli_connect($server, $username, $passw, $database); 
  
  if(!$conn){
     die('error');
  }
  ?>