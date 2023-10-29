<?php
// Connect to your MySQL database
    $hostname = "localhost:3306";
    $dbusername = "root";
    $dbpassword = "imIMM123";
    $database = "fyp";
    $mysqli = new mysqli($hostname, $dbusername, $dbpassword, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
// Fetch location data from the MySQL database
$query = "SELECT name, address, lat, lng FROM markers";
$result = $conn->query($query);

// Create an array to store the location data
$markers = array();
while ($row = $result->fetch_assoc()) {
    $markers[] = $row;
}

$conn->close();
?>
