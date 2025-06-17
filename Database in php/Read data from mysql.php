<?php
include("./config.php");  // this path includes connection setup for database

$getStudents = $conn->prepare("SELECT * FROM student"); // prepare is used to execute query at db 

$getStudents->execute(); // this used to execute the above command

$student = $getStudents->fetchAll(); // This used to fetch all data from db 

echo "<pre>";

print_r($student);

?>