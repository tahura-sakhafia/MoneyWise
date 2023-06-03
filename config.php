<?php
// Database configuration
$dbHost = 'localhost';     // MySQL host (e.g., localhost)
$dbUsername = 'hackathon';  // MySQL username
$dbPassword = 'codeshinigami';  // MySQL password
$dbName = 'moneywise';      // MySQL database name

// Create a connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
