<?php  

$users=[

    [1,"anil","noida","anil@email.com"],
    [2,"sam","delhi","sam@email.com"],
    [3,"peter","gurgaon","peter@email.com"],
    [4,"mukesh","noida","mukesh@email.com"],

];

 //use print_r to display array instead of echo
 echo "<pre>";
 print_r($users);
 echo "<pre>";
 echo "<hr>";


// to access this kind of arrays we have to use nested loops
for($i=0; $i<count($users); $i++){
    //print_r($users[$i]);
     for($j=0; $j<count($users[$i]); $j++){
         echo $users[$i][$j];
         echo "<br>";
     }
}

?>