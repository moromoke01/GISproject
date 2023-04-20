<?php
    require 'locationSearch.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form method="post" action="/location.php">
    <input type="text" name="location" id="location" value="<?php echo !empty($location)?$location:''; ?>" placeholder="Type location...">
    <input type="hidden" name="loc_latitude" id="latitude" value="<?php echo !empty($latitude)?$latitude:''; ?>">
    <input type="hidden" name="loc_longitude" id="longitude" value="<?php echo !empty($longitude)?$longitude:''; ?>">
	
    <select name="distance_km">
        <option value="">Distance</option>
        <option value="5" <?php echo (!empty($distance_km) && $distance_km == '5')?'selected':''; ?>>+5 KM</option>
        <option value="10" <?php echo (!empty($distance_km) && $distance_km == '10')?'selected':''; ?>>+10 KM</option>
        <option value="15" <?php echo (!empty($distance_km) && $distance_km == '15')?'selected':''; ?>>+15 KM</option>
        <option value="20" <?php echo (!empty($distance_km) && $distance_km == '20')?'selected':''; ?>>+20 KM</option>
    </select>
    <input type="submit" name="searchSubmit" value="Search" />
</form>
    </div>




    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=Your_API_Key"></script>

<script>
var searchInput = 'location';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('latitude').value = near_place.geometry.location.lat();
        document.getElementById('longitude').value = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude').value = '';
    document.getElementById('longitude').value = '';
});
</script>
</body>
</html>