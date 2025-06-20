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

/* 
Difference between Interfaces and abstract class

interfaces cannot have properties while abstract classes can

All interface methods must be public while abstract methods are public or protected

All methods in an interface are abstract so they cannot be implementednin code and the abstract keyword is not necessary
*/
?>