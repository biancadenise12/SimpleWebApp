<?php
$host = 'containerid';
$user = 'user';
$password = 'pass';
$db = 'dxc';

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL';
?>