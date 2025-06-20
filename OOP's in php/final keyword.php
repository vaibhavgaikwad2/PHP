<?php

// USE --> it is used to avoid inheritance of class
//by using this keyword class cannot be inherited

final class Car{
    // "cant be inherited";
    final function Name(){
        echo "Car Name";
    }
}
/*
class Honda extends Car{
    echo "it gives error";
    function Name(){
    //it cannot override it
    echo "Honda";
    }
}
*/

?>