<?php 
   
   session_start();
   
  $servername = "localhost";
  $username = "ismail";
  $password = "ME@mysql1@ok";
  $databasename = "rkvmart";
  

  $connection = mysqli_connect($servername, 
    $username, $password, $databasename);

?>