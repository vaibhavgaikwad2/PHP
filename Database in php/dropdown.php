<?php

include("./config.php");
$getstudent=$conn->prepare("SELECT rollno,name FROM student");
$getstudent->execute();
$studentData=$getstudent->fetchAll();

echo "<select>";
echo "<option> select</option>";
foreach($studentData as $student){
    echo "<option value=".$student['rollno'].">".$student['name']."</option>";
}
echo "</select>";

?>