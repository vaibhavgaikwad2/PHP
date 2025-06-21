<?php

// it is an special methods that are automatically invoked by certain actions

/*
1) __construct()
2) __destruct() --> when the script is completed
                --> when the object of class is destroyed
3)__invoke() --> object ko as function call kar sakte hai
4)__get() --> it gives warning for undefined property
*/
class User{
    public $name="vaibhav";
    function getName(){
        echo "my name is vaibhav";
    }

    function __invoke(){
        echo "I am vaibhav";
    }
    
    function __get($property){
        echo "$property property is not exists";
    }


}

$user = new User();

$user();
echo "<br/>";

echo $user->$nama;

?>