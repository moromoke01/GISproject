<?php
session_start();
if (
    !(isset($_SESSION['login']) && $_SESSION['login'] == true) &&
    !(isset($_SESSION['email']) && $_SESSION['email'] == true)
) {
    header("Location: ./Login.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Welcome to GIRS dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js" integrity="sha512-UWtTDM6wtl/qutDD6i1JOGZGiEd92dveVzuLl8sMBkMHlOHcbZdexM7ZrKkeaugW7vhqDnWc2pPD/ohEV+BBbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="signup-form">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <!-- <h2>Welcome</h2> -->
            <br>

            <!-- <?php
                    session_start();
                    include 'database.php';
                    $ID = $_SESSION["Id"];
                    $sql = mysqli_query($conn, "SELECT * FROM gisreg where Id='$Id' ");
                    $row  = mysqli_fetch_array($sql);
                    ?>
            
    
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form> -->
            <div class="container">
                <?php
                include 'head.php';
                ?>

                <div class="box-inside">
                    <div class="box-1">
                        <h1> Geographical Information Retrieval System</h1>
                        <h5>This platfrom provides Geographical Information of Jamb centres in Oyo town</h5>
                    </div>
                    <img src="../Images/layerstack.png" alt="">
                </div>

                <?php
                include '../public/footer.php'
                ?>
            </div>
</body>

</html>