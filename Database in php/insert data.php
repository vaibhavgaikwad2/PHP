<?php

include("./config.php");

// static data insertion
$query = $conn->prepare("
INSERT INTO `student` (`rollno`, `name`, `marks`, `grade`, `city`) 
VALUES (107, 'ansh', 34, 'C', 'delhi')
");

$result = $query->execute();

if ($result) {
    echo "data inserted successfully";
} else {
    echo "data is not inserted";
}


// another method
// $query = $conn->prepare("INSERT INTO student (rollno, name, marks, grade, city) VALUES (?, ?, ?, ?, ?)");
// $result = $query->execute([107, 'ansh', 34, 'C', 'delhi']);

?>
