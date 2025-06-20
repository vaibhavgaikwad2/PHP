<?php

// properties means variables declared in class
class Properties{
    // access modifiers --> public private protected

    public $name="Vaibhav";


    function getname(){
       echo $this->name; 
    }
    function updateName(){
        $this->name="Anil";
    }
}
$p1=new Properties();

echo $p1->name;
echo "<br/>";
$p1->getname();
echo "<br/>";
$p1->updateName();
echo $p1->name;



?>