<?php

$a=5;   // --> int type data
$a = (string) $a;   // --> converts in string datatype
echo $a;
echo "<br>";

echo var_dump($a);
echo "<hr>";

// when we try to convert dtype into bool value it will always returns true except when it is 0

$b = "hello";

$b = (boolean) $b;
echo var_dump($b);
echo "<hr>";

$c = 0;
$c = (boolean) $c;
echo var_dump($c);
echo "<hr>";


// we can not convert array to string it will give type conversion error 
$x = 10;

$x=(array) $x;
echo var_dump($x);
echo "<br>";
$x = (string) $x;






?>