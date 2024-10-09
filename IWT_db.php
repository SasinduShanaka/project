<?php
// Include the database configuration file
$servername = "localhost";
$user_name = "root";
$password = "";
$dbname = "iwt_proj";

// Create connection  
$conn = mysqli_connect($servername, $user_name, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>