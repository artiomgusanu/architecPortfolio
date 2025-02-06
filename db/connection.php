<?php
// Database connection settings
$host = 'sql200.infinityfree.com'; // or your database host
$dbUsername = 'if0_38172004'; // your database username
$dbPassword = 'Siew2vbqSEIUR'; // your database password
$dbName = 'if0_38172004_rita'; // your database name

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
