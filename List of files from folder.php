<?php

//by using scandir we can list the all files that are contain in that folder in array format
// use of scandir is to scan the directory and gives output in the form of array

$path = "files";
$items = scandir($path);
print_r($items);

echo "<br/>";
echo "<br/>";
// array_diff is function used to remove or minus this elemts that passed in parameter
$new_items = array_diff($items,array('.','..'));
print_r($new_items);
echo "<br/>";
echo "<br />";

foreach ($new_items as $item){
    echo $item;
    echo "<br/>";
}

foreach ($new_items as $item){
    echo "<a href=./files/$item>$item</a>";
    echo "<br/>";
}



?>