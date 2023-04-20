<?php
// Get the user input from the form
$location = $_GET['location'];

// Use the Google Maps API to geocode the user input
$geocode = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location) . '&key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap');
$geocode = json_decode($geocode, true);

// Extract the latitude and longitude from the geocode response
$lat = $geocode['results'][0]['geometry']['location']['lat'];
$lng = $geocode['results'][0]['geometry']['location']['lng'];

// Use the MySQL database to search for nearby locations
$pdo = new PDO('mysql:host=localhost;dbname=YOUR_DB_NAME;charset=utf8', 'YOUR_DB_USERNAME', 'YOUR_DB_PASSWORD');
$statement = $pdo->prepare('SELECT * FROM locations WHERE lat BETWEEN ? AND ? AND lng BETWEEN ? AND ?');
$statement->execute([$lat - 0.1, $lat + 0.1, $lng - 0.1, $lng + 0.1]);
$locations = $statement->fetchAll(PDO::FETCH_ASSOC);

// Display the search results
foreach ($locations as $location) {
    echo '<h3>' . $location['name'] . '</h3>';
    echo '<p>' . $location['address'] . '</p>';
    echo '<p>' . $location['description'] . '</p>';
}
?>
