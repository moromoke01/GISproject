<?php
 session_start();
 if(isset($_POST['save']))
 {
    extract ($_POST);
    include '../auth/database.php';

    $sql= mysqli_query($conn, "SELECT * FROM gisreg where Email = '$email' and Passwordd = '$pass'");

    $row = mysqli_fetch_array($sql);
    if (is_array($row)){
        $_SESSION["Id"] = $row['Id'];
        $_SESSION["Email"]=$row['email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 

        header("Location: ../Admin/auth/home.php"); 

        echo '<script type="text/javascript">alert("Successfully logged in");</script>';
        $_SESSION['login'] = true;      
        
    }
    else{
        echo '<script type="text/javascript">alert("Invalid Email or Password");</script>';
        
    }
 }
?>