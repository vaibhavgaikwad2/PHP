<?php

/* it decides where we can access the methods and properties.

Access Zone -->
Access inside the cureent class only -->protected
Access ecerywhere -->public
Access in inherited class --> private --> outside the class cannot be accessed

Types -->
private
public
protected
*/
class Teacher{
    private function questionPapers(){
        echo "question paper for students";
    }
    function exam(){
        $this->questionPapers();
    }
}

$obj1= new Teacher();
//$obj1->questionPapers(); // here direct access is prohibated
$obj1->exam();
?>