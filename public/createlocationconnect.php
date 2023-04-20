<?php

  extract($_POST);

  include ("database.php");

  //if button with name "save" is clicked, put data entered into the database
if(isset($_POST['submit']))
{
  $query =" INSERT INTO places (addres, latitude, longitude) VALUES ('$address', '$lat', '$log')";

  $sql2 = mysqli_query($conn, $query) or die ("Action can not be performed");

  header("Location: Searchlocation.php?status=success");
}
?>