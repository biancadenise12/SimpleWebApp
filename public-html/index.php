<?php

$servername = "172.17.0.2";
$user = "root";
$password = "root";
$dbname = "DXCdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>