<?php
// Database connection settings
$host = 'localhost'; // or your database host
$dbUsername = 'root'; // your database username
$dbPassword = 'root123'; // your database password
$dbName = 'rita'; // your database name

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
