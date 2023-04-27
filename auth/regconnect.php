<?php

extract($_POST);

include ("database.php");
//check if account already exist
$sql = mysqli_query($conn, "SELECT * FROM gisreg where Email='$email'");

if(mysqli_num_rows($sql) > 0){
    echo "Email already Exists";

    exit;
}
//if button with name "save" is clicked, put data entered into the database
if(isset($_POST['save']))
{
  $query =" INSERT INTO gisreg (First_Name, Last_Name, Email, Passwordd) VALUES ('$first_name', '$last_name', '$email', '$pass')";

  $sql2 = mysqli_query($conn, $query) or die ("Action can not be performed");
  if ($sql2)
  {
   

    echo '<script type="text/javascript">alert("Successfully Registered");</script>';
   
  }
  
  else
  {
    echo '<script type="text/javascript">alert("Failed");</script>';
  }

   header("Location: Login.php?status=success");
}

?>  