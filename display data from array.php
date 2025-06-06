<?php

$users=[

    [1,"anil","noida","anil@email.com"],
    [2,"sam","delhi","sam@email.com"],
    [3,"peter","gurgaon","peter@email.com"],
    [4,"mukesh","noida","mukesh@email.com"],

];

echo "<table border = 1>";
foreach($users as $user){
    echo "<tr>";
    foreach($user as $item){
        echo "<td>";
        echo $item;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>