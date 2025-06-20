<?php

/*Interface -->An interface is a contract that defines what methods a class must implement, without providing the method's code.

Why Use Interfaces?

    To enforce rules in a project.

    To achieve polymorphism (multiple classes using the same interface differently).

    To decouple code (low dependency between parts of the system).
*/
interface Animal{
    public function MakeSound();
}
class Dog implements Animal{
    public function MakeSound(){
        echo "Barks ";
    }
}
?>