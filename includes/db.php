<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password (leave blank)
$dbname = "phpblog"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
