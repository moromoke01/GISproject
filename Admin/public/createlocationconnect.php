<?php

  extract($_POST);

  include ("../auth/database.php");

  //if button with name "save" is clicked, put data entered into the database
if(isset($_POST['submit']))
{
  $query =" INSERT INTO location_tab (title, addres, locationLatitude, locationLongitude) VALUES ('$title','$address', '$lat', '$log')";

  $sql2 = mysqli_query($conn, $query) or die ("Action can not be performed");

  header("Location: ManageLocation.php?status=success");
}
?>