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
?>