<?php
/*
Logical operators 
1)AND --> &&
2)OR --> ||
3)XOR --> xor --> it gives 0 when both is TT and FF
4)NOT --> !
*/
$a=10;
$b=20;
$c=30;
if($a==10 && $b==20){
    echo "Success";
    echo "<br>";
}

if($a==10 || $b==30){
    echo "True";
    echo "<br>";
}

if($c==20 xor $a==10){
    echo "False";
}
?>