<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you haven't set a password, keep it empty
$dbname = "dreamhouse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
