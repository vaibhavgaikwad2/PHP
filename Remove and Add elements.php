<?php

$users=['vaibhav','anil','peter','bruse'];

//to add element in array use array_push(arr_name,element);
array_push($users,"sam","tony","nick");

print_r($users);
// To remove element use array_pop() by deafault it will remove last element 
// use array_splice it will remove elements in bulk
echo "<br>";
array_pop($users);
print_r($users);

echo "<br>";

array_splice($users,-3); //it will remove 3 elements from last
print_r($users);

?>