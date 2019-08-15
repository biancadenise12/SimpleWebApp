<?php
$host = '7962b6d240e3';
$user = 'user';
$password = 'pass';
$db = 'dxc';

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL';
?>
