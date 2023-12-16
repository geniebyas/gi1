<?php
// Database connection details
$servername = "localhost";
$username = "gi1admin";
$password = "gi1@infoapp";
$database = "gi1infoappdb";

// Create a connection
$con = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
