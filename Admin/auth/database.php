<?php
      $url ='localhost';
      $username = 'root';
      $password='';
      $conn = mysqli_connect($url, $username, $password, "gis-project");
      if(!$conn){
        die('could not connect My Database:' .mysqli_error());
      }
?>