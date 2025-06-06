<?php
/*
types:
1) Arithmatic operators --> +,-,*,/,%,**
2) ASSIGNMENT operators --> 
3)Comparision operators 
4)Increment/Decrement operators
5)logical operators 
6)string operators
7)Array operators conditional
*/

$a=100;
$b=200;
echo $a*$b;
echo "<br>";

// Assignment operators
echo $a=$b;
echo "<br>";

echo $a+=$b; // a = a+b
echo "<br>";

echo $a-=$b;
echo "<br>";

echo $a*=$b;
echo "<br>";

echo $a/=$b;
echo "<br>";


// Comparision operators
/*
== --> Equal --> Returns True if $x is equal to $y
=== --> Identical--> Returns true if $x is equal to $y and they have same type
!= or <> --> Not equal
!== --> Not identical
<=> --> spaceship --> Returns an integer less than, equal to,or greater than zero
depending on if $x is less than, equal to or greater than $y.


all comparison operators returns boolean value except spaceship operator
*/
echo $a<=>$b;
echo "<br>";


echo $a === $b;
echo "<br>";

// Increment/Decrement operator
/*
++$a --> Pre-increment --> Increments $a by one and then returns $a
$a++ --> Post-increment --> returns $a then increments $a by one
--$a and $a-- same as it is

*/

echo ++$a;
echo "<br>";

echo $a++;
echo "<br>";
echo $a;
echo "<br>"






?>