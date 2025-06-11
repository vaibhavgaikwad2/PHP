<?php

// we can store different types of data in single array
/*
Types of array
1)Indexed array
2)Associative array
3)Multidimensional array
*/
$users=['vaibhav','anil','peter','bruse'];
//echo $users[0];
echo count($users);
echo "<br>";
for($i=0;$i<count($users);$i++){
    
    echo $users[$i];
    echo "<br>";
}
echo "<br/>";
echo "<br/>";
//Array functions
echo is_array($users); // --> used for to check is it array or not
echo "<br/>";
array_push($users,"siddhu");
print_r($users);
echo "<br/>";
//array_pop($users) 
// implode($users) --> used to convert array into string
// explode($str, " ") --> used to convert str into array
// array_merge(arr1,arr2); --> used to combine two arrays
//array_unique(arr_name); --> removes duplicate elemnts


?>