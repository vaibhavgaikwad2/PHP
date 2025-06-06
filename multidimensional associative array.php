<?php

$users=[
    ["name"=>"vaibhav","age"=>21,"city"=>"pune"],
    ["name"=>"anil","age"=>20,"city"=>"noida"],
    ["name"=>"sam","age"=>23,"city"=>"gurgaon"],
    ["name"=>"peter","age"=>26,"city"=>"delhi"]
];

echo "<table 'border=1'>";
foreach($users as $user){
    echo "<tr>";
    foreach($user as $key=>$item){
        echo "<td>";
        echo "$item";
        echo "<br/>";
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>";
?>