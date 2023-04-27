<?php
  session_start();
  if(
      !(isset($_SESSION['login']) && $_SESSION['login'] == true) &&
      !(isset($_SESSION['email']) && $_SESSION['email'] == true)
    ){
    header("Location: ../auth/Login.php");
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/reglog.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js" integrity="sha512-UWtTDM6wtl/qutDD6i1JOGZGiEd92dveVzuLl8sMBkMHlOHcbZdexM7ZrKkeaugW7vhqDnWc2pPD/ohEV+BBbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container " id="cont-shift">
        <?php
        include '../auth/head.php';

        include '../auth/database.php';
        ?>
<div class=" location-cont">
    
    <div class="col-md-7 side-shade"></div>
    
        <div class="col-md-4 form-box">
           
            <form action="createlocationconnect.php" method="POST" enctype="multipart/form-data">
               <h2>Add Jamb Location</h2>
                <label for="address">Title</label>
                <input type="text" name="title" class="form-control">

                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">

                <label for="longitude">longitude</label>
                <input type="text" name="log" class="form-control">

                <label for="latitude">latitude</label>
                <input type="text" name="lat" class="form-control">

                <input type="submit" name="submit" value="Submit" class="btn btn-success ">
            </form>
        </div>
    </div>
    
    <?php
        include './footer.php'
        ?>
</div>
</body>

</html>