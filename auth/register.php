<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Register on GIS Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
                
                <form action="regconnect.php" method="post" enctype="multipart/form-data" class="login-box">
                    <h2 class="text-center ">Register</h2>
                    <p class="text-center ">Create your account</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
                    </div>
				<div class="form-group">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
                </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-success btn-lg ">Register</button>
                    </div>
                    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>

                    
                </form>
            </div>
        </div>
        <?php
        include '../public/footer.php'
        ?>
    </div>
</body>
</html>