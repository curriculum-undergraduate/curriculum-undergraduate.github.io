<?php
$host = "103.129.221.147";
$port = "3306";
$database = "lumintu_db";
$username = "admin";
$password = "rahasia";
// Create connection
$conn = mysqli_connect($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>