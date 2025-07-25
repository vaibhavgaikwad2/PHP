<?php

/*
Type hinting is a feature in PHP that allows you to specify the expected 
data type (e.g., int, string, array, class name) for function parameters,
 return values, and class properties to ensure type safety.


Why Use It?

    Prevents bugs by enforcing correct data types.

    Improves code readability and auto-suggestions in IDEs.

    Helps in debugging and maintenance.

    reduces servers time by handling error before code execution
*/
// specify type of array in function's parameter

function Fruit(string $name){
    echo $name;
}

Fruit("apple");
fruit([123]);  // this gives error because we passed array in it


?>