<?php

/*
JSON stands for javascript object notation.
it is text based data exchange format for structuring data. 
it is mainly used to exchange data in between a server and web application
All datatypes are allowed 
it is inherited from objects of js thats why its name is JSON

to convert dtype into json use json_encode
*/

$user = ["name"=>"vaibhav", "age"=>21];
// converting this array into json 
$user_JSON =json_encode($user);

echo $user_JSON;


?>