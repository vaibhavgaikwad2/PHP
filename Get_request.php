<?php

// Req is visible in address bar that's why this is less secure
// mostly used to get data from server

//firstly to receive data from html file, create html file and use action tag inside this tag write php file name where you want to send data

echo "this is php file used to get data from login.html file";
echo "<br>";
echo $_GET['user_name'];
echo "<br>";

echo $_GET['password'];
echo "<br>";

?>