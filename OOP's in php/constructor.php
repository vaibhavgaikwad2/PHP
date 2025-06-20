<?php

/*
A sepcial function in php
Call automatically when an object is created
__construct is fixed name for constructor
used to make db connection
only one constructor is defined in each class
*/
class constructor{
    function __construct(){
        echo "constructor is called ";
    }
}
$obj = new constructor(); // constructor is called when object is created

?>