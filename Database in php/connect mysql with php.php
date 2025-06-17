<?php

$host="localhost"; // in this variable there is name of db host
$username="root";
$password="Vaibhav@123456";
$database="institute";

$conn = new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("some error".$conn->$connect_error);
}

echo "connection is successful";
echo "<br>";
$result = $conn->query("SELECT * FROM student")->fetch_all();
print_r($result);
?>