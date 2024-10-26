<?php
$servername = "localhost";
$username = "root"; // Database username, default is "root" for XAMPP
$password = ""; // Database password, default is empty for XAMPP
$dbname = "memorialization_system"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
