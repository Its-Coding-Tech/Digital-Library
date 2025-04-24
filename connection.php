<?php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "CMS";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>