<?php

class Teacher{
    public $city="Delhi";
    function nextExam(){
        echo "next exam is physics";
    }
    function age(){
        echo "my age is 40";
    }
}
class Student extends Teacher{
    public $city="noida";
    function age(){
        echo "my age is 21"; // this is function overriding
    }

}
echo "function overloading";
echo "<br/>";
$st=new Teacher();
$st->age();
echo "<br/>";
$st1= new Student();
$st1->age(); // function overriding
echo "<br/>";
echo "<hr/>";

echo "property overloading";
echo "<br/>";
echo $st->city;
echo "<br/>";
echo $st1->city;

?>