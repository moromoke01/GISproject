<?php
include "../auth/database.php";

extract($_POST);

$id= $_GET['Id'];
$qry= mysqli_query($conn,"SELECT * FROM  location_tab WHERE Id='$id'");

$data= mysqli_fetch_array($qry);

if (isset($_POST['update'])) 
{
    $edit = mysqli_query($conn, "UPDATE location_tab set title = '$title', addres = '$address', Locationlatitude = '$lat', Locationlongitude = '$log' WHERE Id='$id' ");

    if($edit){
        header("location:ViewCentres.php");
        
        echo '<script type="text/javascript">alert("Successfully updated");</script>';
        mysqli_close($conn);

	
	exit;
	}
	else{
		echo mysqli_error();
	    
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update database Location</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reglog.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="container " id="cont-shift">
        <!--Navbar-->
        <?php
        include '../auth/head.php';
        ?>

<div class=" location-cont">
    
    <div class="col-md-7 side-shade"></div>
    
        <div class="col-md-4 form-box">
           
            <form  method="POST" enctype="multipart/form-data">
               <h2>Add Jamb Location</h2>
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>">

                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $data['addres'];  ?>">

                <label for="latitude">latitude</label>
                <input type="text" name="lat" class="form-control" value="<?php echo $data['locationLatitude'];  ?>">

                <label for="longitude">longitude</label>
                <input type="text" name="log" class="form-control" value="<?php echo $data['locationLongitude'];  ?>">

                
                <input type="submit" name="update" value="Update" class="btn btn-success ">
            </form>
        </div>
    </div>
</div>
</body>

</html>