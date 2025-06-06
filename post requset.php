<?php

// Req is not visible in address bar
// secure
// used to create and update operations on server


/*
make html file to send data
make php file to receive data
make input field in html file
Receive data in php file
*/
// echo $_POST["user_name"];
// echo "<br>";
// echo $_POST["password"];
// echo "<br>";

//alternative method

print_r($_POST); // --> It will display data in the form of array

//another method
if($_POST){
    echo "<br>";
    echo "user name is ". $_POST["user_name"];
    echo "<br>";
    echo "password is ". $_POST["password"];
    echo "<br>";
}

?>