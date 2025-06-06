<?php
/*
Use of go to statments--> it is used to skip a particular block of code when a particular condition matches.


*/

$x=20;
echo "before condition <br/>";

if($x==20){
    goto jump;
}
$name="vaibhav";
echo $name;

jump:
echo "statement jump here after matching the condition";
 


// Now this skips middle block of code means in output $name will not print

echo "<br>";
$i=0;

while($i<=10){
    echo $i;
    echo "<br>";
    $i++;
if($i==5){
    goto outside;
}
}

outside:
echo "this skips the value when $i";

?>