<!DOCTYPE html>
<html>
<head>
    <title>Google Map with PHP and MySQL</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 },
                zoom: 2
            });

            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            
foreach ($markers as $marker) {
    echo "var marker = new google.maps.Marker({
            position: { lat: {$marker['lat']}, lng: {$marker['lng']} },
            map: map,
            title: '{$marker['name']}'
        });\n";
}
?>

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAddUnZRtpNwls89IBk-k7zPH9GxXzADqk">
    </script>
</body>
</html>
