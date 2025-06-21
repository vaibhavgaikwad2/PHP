<?php

class Company{
    function getname(){
        echo "This is honda company";
        echo "<br/>";
        return $this;

    }
    function getinfo(){
        echo "this is info of honda";
    }
}

$company = new Company();
$company->getname()->getinfo(); // this chaining of methods
?>