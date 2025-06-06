<?php
/*
String Operators
1) . Operator is used to add variable in string
2) .= Operator is used to add variable inside the string
*/

$name = "vaibhav gaikwad";
$age = 21;
echo "My name is $name";
echo "<br>";
echo "my name is ".$name;
echo "<br>";
echo 'my name is $name'; //--> do not use '' to add variable
echo "<br>";
echo "My name is ".$name. " and my age is ".$age;
echo "<br>";

$str1 = "Hello";
$str2 = "world";

$str1.=$str2;
echo $str1;







?>