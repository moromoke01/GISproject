<?php 
// Include database configuration file 
require_once 'database.php'; 
 
// If search form is submitted 
if(isset($_POST['searchSubmit'])){ 
    if(!empty($_POST['location'])){ 
        $location = $_POST['location']; 
    } 
     
    if(!empty($_POST['loc_latitude'])){ 
        $latitude = $_POST['loc_latitude']; 
    } 
     
    if(!empty($_POST['loc_longitude'])){ 
        $longitude = $_POST['loc_longitude']; 
    } 
     
    if(!empty($_POST['distance_km'])){ 
        $distance_km = $_POST['distance_km']; 
    } 
} 
 
// Calculate distance and filter records by radius 
$sql_distance = $having = ''; 
if(!empty($distance_km) && !empty($latitude) && !empty($longitude)){ 
    $radius_km = $distance_km; 
    $sql_distance = " ,(((acos(sin((".$latitude."*pi()/180)) * sin((`p`.`latitude`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`p`.`latitude`*pi()/180)) * cos(((".$longitude."-`p`.`longitude`)*pi()/180))))*180/pi())*60*1.1515*1.609344) as distance "; 
     
    $having = " HAVING (distance <= $radius_km) "; 
     
    $order_by = ' distance ASC '; 
}else{ 
    $order_by = ' p.id DESC '; 
} 
 
// Fetch places from the database 
$sql = "SELECT p.*".$sql_distance." FROM places p $having ORDER BY $order_by"; 
$query = $db->query($sql); 
?>