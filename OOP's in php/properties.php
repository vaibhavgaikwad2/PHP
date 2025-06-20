<?php

// properties means variables declared in class
class Properties{
    // access modifiers --> public private protected

    public $name="Vaibhav";


    function getname(){
       echo $this->name; 
    }
}
$p1=new Properties();

echo $p1->name;
echo "<br/>";
$p1->getname();


?>