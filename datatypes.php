<?php
// There are 8 types of datatypes in php
//1) String
$name='vaibhav';
echo $name;
echo '<br>';
echo var_dump($name); // used for check datatype of var
echo'<br>';

//2) int
$num=10;
echo $num;
echo '<br>';
echo var_dump($num);
echo '<br>';

//3) Float
$floatnum=10.01;
echo $floatnum;
echo '<br>';
echo var_dump($floatnum);
echo '<br>';

//4) Boolean
$bool = true;
echo $bool;
echo '<br>';
echo var_dump($bool);

//5) Array
$arr=['v','a','i','b','h','a','v'];
echo '<br>';
echo var_dump($arr);

//6) NUll
$empty = null;
echo '<br>';
//echo $empty;
echo '<br>';
echo var_dump($empty);

//7) Objects (class)
//$user = new className();

//8) Resourse --> used to store connection type of db 
//it is special type of db
$connection = ftp_connect('127.0.1');
echo var_dump($connection);
?>


<?php

/*
browser only understands html css and js
php executes or interpreted on web server.
excahnge of input output is done through http requests
php is server side scripting language so browser didn't understand 
after interpretation webserver sends http response in the form of
html document

PHP Code → Executed on Server → Outputs HTML → Sent to Browser
*/
?>