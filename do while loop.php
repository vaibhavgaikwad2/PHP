<?php
/*
do while loop
Syntax:
declare initial value for loop
do{
        //code
        Increment/decrement
        
}while(condition)
*/

$num =1;
do {
    echo "current loop value is $num <br/>";
    $num++;
}while($num<=10);
echo "<br>";

// effect of declaring incr/decr before the code
$num=10;
do {
    $num++;
    echo "new loop value is $num <br/>";
}
while($num<=10);
echo "<br>";

$num=-10;
$i=-1;
do{
    
    echo "reverse loop value is ".$i*$num;
    echo "<br>";
    $num++; 
}while($num<=0);
echo "<br>";


$num=10;
do{
    echo "$num <br/>";
    $num--;

}while($num>=0);
?>