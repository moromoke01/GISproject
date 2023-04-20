<?php
  // Database connection
//   $servername = "localhost";
//   $username = "username";
//   $password = "password";
//   $dbname = "database_name";
  
//   $conn = new mysqli($servername, $username, $password, $dbname);
  
//   if($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
//   }
   include "database.php";
  
  // Retrieve locations based on user's location
  $lat = $_POST["lat"];
  $lng = $_POST["lng"];
  
  $sql = "SELECT * FROM places ORDER BY (POW((lat - $lat), 2) + POW((lng - $lng), 2)) ASC LIMIT 10";
  
  $result = $conn->query($sql);
  
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<p>" . $row["name"] . "</p>";
    }
  }else{
    echo "<p>No locations found.</p>";
  }
  
  $conn->close();
?>
