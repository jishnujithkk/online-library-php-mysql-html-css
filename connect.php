<?php
$servername = "localhost";
$dbname = 'lms';
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "You are Online";
?>
