<?php
// Database connection details
$servername = "localhost";
$username = "u164182978_gi1superapp";
$password = "Genie@01";
$database = "u164182978_gi1superapp";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>