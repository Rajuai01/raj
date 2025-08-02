<?php
// Database connection setup
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

// Admin account details
$name = "Admin";
$email = "admin@fitpilot.com";
$password = password_hash("admin123", PASSWORD_DEFAULT); // Hash the password
$role = "admin";

// Insert admin account into the database
$stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password, $role);

if ($stmt->execute()) {
    echo "Admin account created successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>