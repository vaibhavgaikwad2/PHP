<?php
include("./config.php");  // this path includes connection setup for database

$getStudents = $conn->prepare("SELECT * FROM student"); // prepare is used to execute query at db 

$getStudents->execute(); // this used to execute the above command

$students = $getStudents->fetchAll(); // This used to fetch all data from db 

// echo "<pre>";

// print_r($students);

echo "<table border ='1'>";
echo "<tr>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
        <th>City</th>
      </tr>";
foreach($students as $student){
    echo "<tr>
        <td>". $student['name']. "</td>
        <td>". $student['marks']. "</td>
        <td>". $student['grade']. "</td>
        <td>". $student['city']. "</td>
        </tr>";
}
echo "<table>";

?>