<?php

/*
A namespace in PHP is used to organize and group related classes, interfaces, functions, and constants, 
and to avoid name conflicts in large applications.

Why Use Namespaces?

    Prevents name collisions when using multiple libraries.

    Keeps code organized and modular.

    Helps autoloader locate files correctly in large projects.
*/

include("./teacher.php");
include("./student.php");

$teacher = new teacher\JoiningDetails();
$teacher->joiningDate();

echo "<br/>";

$student = new student\JoiningDetails();
$student -> admissionDate();
// without using namespace gives this error
/* 
Fatal error: Cannot declare class JoiningDetails, because the name is already in use in the student.php
*/
// so avoid this error we use namespace

?>