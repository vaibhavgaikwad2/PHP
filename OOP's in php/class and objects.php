<?php

class Math{

     /* best practises for class 
    1) one file one class
    2) file name = class name
    3)
    */

    function sum(){
        echo 10+20;
    }

}
// objects
$obj1= new Math();           // this is object 1 

$obj1->sum();   // calling function 


?>