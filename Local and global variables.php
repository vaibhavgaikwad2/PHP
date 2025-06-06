<?php

// variable that can accessed or used from anywhere e.g inside or outside the function is called as global variable
// variable that can accessed within the function is called local variable.
$age=21;
function get_name(){
    $name = "vaibhav"; // local variable
    global $age; //--> syntax for access global var in function because it gives warning without this
    echo "This is local variable --> name= $name";
    echo "<br>";
    echo "This is global variable --> age= $age";
    echo "<hr>";
}
get_name();
//echo $name;  --> gives warning because it can't be used outside the function
echo $age;

// we can also change global variable inside the function by just assigning them new value

?>