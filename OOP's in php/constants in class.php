<?php

class Constants{
    const collegename="SIT";
}

echo Constants::collegename; // --> this method is also called scope resolution operator
/*
the :: operator is used to access class methods, constants, and static properties without creating an object, or to refer to parent class members.

It’s commonly called the Scope Resolution Operator

syntax --> echo class_name::const,method name;
*/

?>