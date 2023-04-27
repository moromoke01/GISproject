<?php 

include "../auth/database.php";

if (isset($_GET['del'])) {
    $id =$_GET['del'];

    $del = mysqli_query($conn, "DELETE FROM location_tab where Id=$id");

    if ($del) {
        echo "<script>window.alert('Location deleted');</script>";
    }
    echo "<script>window.location.href=('retrieve.php');</script>";
}
?>