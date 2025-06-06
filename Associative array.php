<?php

// Associative array contains key value pairs
$user_details=[
    "name"=>"vaibhav",
    "age"=>21,
    "city"=>"pune",
    "state"=>"MH"
];

//echo $user_details["name"];

foreach($user_details as $key => $data){
    echo $key ." is ".$data;
    echo "<br>";
    
}
 
echo "<hr>";

foreach($user_details as $data){
    echo $data;
    echo "<br>";

}

echo "<hr>";

foreach($user_details as $key => $data){
    echo $key;
    echo "<br>";
}
?>