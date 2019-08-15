<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = '7962b6d240e3';
$db   = 'dxc';
$user = 'user';
$pass = 'pass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $conn=new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
    $cover = $e->getMessage(); 
}

if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
else echo 'Successfully connected to MYSQL';
?>