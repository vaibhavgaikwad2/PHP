<?php

// it is pre defined variables by php and used anywhere in program 
$a=10;
const b=20;
echo "<pre>";
print_r($GLOBALS); //--> it tells about total number of global variables that are defined in whole file and const is not global variable so it can't show this

print_r($_SERVER); //--> it returns server's information

print_r($_REQUEST); // --> Retrieve data from both GET and POST Requests

print_r($_GET);

print_r($_POST);

print_r($_FILES); //--> It gives files which are uploaded on server

print_r($_COOKIE); //--> deals with saved data in browser





echo "<pre>";




?>