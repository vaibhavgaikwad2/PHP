<?php
// to avoid rewriting of data we use this config file as common in all operation from read write and delete
$host = "localhost";
$username = "root";
$password = 'Vaibhav@123456';

$conn = new PDO("mysql:host = $host;dbname=institute",$username,$password);
$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo 'connection done';
?>