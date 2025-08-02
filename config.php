<?php
$servername = "localhost"; // Your database server
$username = "root";        // Your database username (default is "root" for XAMPP)
$password = "";            // Your database password (default is empty for XAMPP)
$dbname = "fitness_app";      // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>