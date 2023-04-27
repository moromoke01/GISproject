<?php
session_start();
if (
    (isset($_SESSION['login']) && $_SESSION['login'] == true) && (isset($_SESSION['email']) && $_SESSION['email'] == true)
) {
    header("Location: '../Admin/auth/home.php'");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Login to GIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reglog.css">
    <link rel="stylesheet" href="../css/style.css">
   

</head>

<body>
    <div class="container" id="cont-shift">
        <?php
        include 'head.php';
        ?>
        <div class="cont-box">
            <div class="form-box  d-flex flex-row  justify-content-center justify-content-lg-start">
                
                <form action="loginProcess.php" method="post" enctype="multipart/form-data" class="login-box">
                    <h2 class="text-center ">Login</h2>
                    <p class="text-center ">Enter Login Details</p>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-success btn-lg ">Login</button>
                    </div>
                    <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>

                    
                </form>
            </div>
        </div>
        <?php
        include '../public/footer.php'
        ?>
        
    </div>
</body>

</html>