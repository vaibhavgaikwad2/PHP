<?php

// this loop is used for to looping on array
$users=['vaibhav','anil','peter','bruce'];

foreach($users as $x){
    echo $x;
    echo "<br>";
    if($x=="peter"){
        break;
    }

}

echo "<hr>";
foreach($users as $x):
    
    echo $x;
    echo "<br>";

endforeach
?>