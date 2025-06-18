<?php

include("./config.php");

$query=$conn->prepare("DELETE FROM student WHERE rollno = 108");
$query->execute();
echo "success";



?>