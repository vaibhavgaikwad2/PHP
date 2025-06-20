<?php


/*A trait is a reusable collection of methods that can be included in multiple classes to avoid code duplication.
PHP doesn't support multiple inheritance, but traits help fill that gap 


Why Use Traits?

    To share common methods across multiple classes.

    To avoid writing the same code again and again.

    To simulate multiple inheritance in PHP.
*/
trait Logger{
    public function log($message){
        echo "Log::$message";
    }
}

class User{
    use Logger;
}

class Product{
    use Logger;
}

$user = new User();

$product = new Product();

$user->log("new user added successfully !");
echo "<br/>";
$product->log("new product added");

?>