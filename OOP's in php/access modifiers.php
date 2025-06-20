<?php

/* it decides where we can access the methods and properties.

Access Zone -->
Access inside the cureent class only -->private
Access ecerywhere -->public
Access in inherited class --> protected -->

Types -->
private
public
protected
*/
class Teacher{
    private function questionPapers(){
        echo "question paper for students";
    }
    function exam(){ //  by default this method is public
        $this->questionPapers();
    }

    protected function marks(){
        echo "all students marks";
    }
}
class Management extends Teacher{
    function reviewMarks(){
        $this->marks();
    }
}

$obj1= new Teacher();
//$obj1->questionPapers(); // here direct access is prohibated
$obj1->exam();
echo "<br/>";
$obj=new Management();
$obj->reviewMarks();
?>