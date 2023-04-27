<?php

// Database connection
include "../auth/database.php";

// Get the user input from the form
$location = $_GET['location'];

// Retrieve locations based on user's location
$lat = $_POST["latitude"];
$lng = $_POST["longitude"];

$sql = "SELECT * FROM places ORDER BY (POW((latitude - $lat), 2) + POW((longitude - $lng), 2)) ASC LIMIT 10";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row["name"] . "</p>";
  }
} else {
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <div class="container" id="cont-shift">
    <?php
    include '../auth/head.php';
    ?>

    <div class="box-inside">
      <div>
        <form action="Search.php" method="GET">
          <label for="location">Enter a location:</label>
          <input type="text" name="location" id="location">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>