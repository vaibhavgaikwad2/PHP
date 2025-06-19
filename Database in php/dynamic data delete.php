<?php

include("./config.php");

$query = $conn->prepare("SELECT * FROM student");
$query ->execute();
$students=$query->fetchAll();

echo "<table border='1' style='margin:auto' >";
echo "<tr>
        <th>Roll no</th>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
        <th>City</th>
        <th>Delete</th>
    </tr>";
foreach($students as $student){
echo "<tr>
        <td>".$student['rollno']."</td>
        <td>".$student['name']."</td>
        <td>".$student['marks']."</td>
        <td>".$student['grade']."</td>
        <td>".$student['city']."</td>
        <td><form method='post'>
        <button name=delete value=".$student['rollno'].">Delete</button>
        </form></td>
        <td><a href='update.php? id=".$student['rollno']."'>Update</a></td>
    </tr>";
}
echo "</table>";

if (isset($_POST['delete'])) {
    $rollno = $_POST['delete'];
    $query = $conn->prepare("DELETE FROM student WHERE rollno = ?");
    $query->execute([$rollno]);
}

    

?>