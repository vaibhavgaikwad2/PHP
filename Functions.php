<?php
/*
Syntax of the function
function func_name(parameters){
    //code
}

call a function
func_name();
*/
function test(){
    echo "Hello";
    echo "<br>";
    echo "<hr/>";
}

test();
test();

// we can call funtion inside the another function
// it is okay to call function before creation 

function dumy(){
    echo "<h1>User Details</h1>";
}
function user_details($name,$age){
    dumy();
    
    echo "User Name: $name<br/>";
    echo "Age: $age<br/>";
    echo "<hr/>";

}

user_details("Vaibhav",21);
user_details("Anil",22);
user_details("shyam",25);


// functions with return statements

// echo is for displaying it does not gives output
// for obtaining output we required return statement
function user_name(){
    return "Vaibhav";
}

user_name();  //--> this will not print value by only calling like echo..
echo "<h1> Hii current user is ".user_name()."</h1>";
echo "<hr>";


// without return statement
function name(){
    echo "Vaibhav";
    echo "<br>";
}

name(); 
echo "<h1> Hii current user is ".name()."</h1>"; // --> this will not give output means value because echo is display statement
echo "<hr>";

//functions with default parameters --> when we missed the 2nd parameter then default parameter is showed up to avoid error of missing parameter

function fruit($name,$color='red'){
    echo "This is $name and it's color is $color";
    echo "<hr>";
}
echo "<h1> this is function with default parameter</h1> <br/>";
fruit("Apple");

fruit("Mango","green");


// to make dynamic always pass variables


// Nested functions
// we have to create function firstly then call it inside the function 
// this is not like above function
// it is must to call parent function before the inner function
// sequence matters
// we can also call child function inside the parent function

function parent_function(){
    echo "Parent function is called ";
    echo "<br>";

    function child_function(){
        echo "child function is called <br/>";

    }
}

parent_function();
child_function();


function function1(){
    echo "Parent function1 is called ";
    echo "<br>";

    function function2(){
        echo "child function2 is called";
        echo "<hr>";

    }
    function2();
}

// due to this there is no requirement to call this child function again

function1();

// Variable functions
// we can store functions inside the variable

// assign function name without () to a variable

$var_function = "function2";

// calling variable function

$var_function();

// call back function 

//A callback function is a function passed as an argument to another function — and then called (executed) inside that function.

function tested(){
    echo "test function called";

}
$test = "tested";
function main($a){
    $a();
}

main($test);



//Inbuilt functions

/* 
1)strlen() --> used to calculate length of string
2)var_dump($variable) --> type of variable
3)date("d") --> this date function is used to print date always pass parameters
4)phpinfo() --> returns information about php
5)is_string() --> returns bool value 
6)rand() --> used to generate random value
7)die(); or exit(); --> used to cutoff the execution of code
8)substr($str,index_number) --> used to divide this string from index number

*/
echo "<hr>";
echo "<br>";
echo date("d");

echo "<br>";
echo date("m");

echo "<br>";
echo date("y");

echo "<br>";
echo date("l");

echo "<br>";
echo date("M");
echo "<hr>";


?>
