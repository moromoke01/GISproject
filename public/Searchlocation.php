<?php
 
  // Database connection
 include "database.php";

 // Get the user input from the form
 $location = $_GET['location'];
  
  // Retrieve locations based on user's location
  $lat = $_POST["latitude"];
  $lng = $_POST["longitude"];
  
  $sql = "SELECT * FROM places ORDER BY (POW((latitude - $lat), 2) + POW((longitude - $lng), 2)) ASC LIMIT 10";
  
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Location</title>
</head>
<body>
<form action="" method="GET">
    <label for="location">Enter a location:</label>
    <input type="text" name="location" id="location">
    <button type="submit">Search</button>
</form>
               
</body>
</html>