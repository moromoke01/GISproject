<?php
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION = array(); 
    session_destroy(); 
    header("Location: /index.php"); // Or wherever you want to redirect
    exit();

    echo '<script type="text/javascript">alert("You have been logged out");</script>';
?>