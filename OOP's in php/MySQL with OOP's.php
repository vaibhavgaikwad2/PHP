<?php

$host="localhost";
$username="root";
$password="Vaibhav@123456";


$conn = new PDO("mysql:host=$host;dbname=institute",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "connection Done";
echo "<br/>";

class Student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn=$conn;
    }
    function getData(){
        $getStudents = $this->DBconn->prepare("SELECT * FROM student");
        $getStudents->execute();
        $result=$getStudents->fetchAll();
        echo "<pre>";
        print_r($result);
    }
}

$student=new Student($conn);
$student->getData();
?>