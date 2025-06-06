<?php
/*
Types of conditional statements
1) if condition --> syntax --> if(condition){code to execute}
2)if else
3)else if
4)switch statements

*/
$age = 18;
if($age<17){
    echo "display Kids content";

}

elseif($age==18){
    echo "Display content";
    echo "<br>";
}

else{
    echo "Display mature content";

}

// Switch statement
$fav_color="yellow";

switch($fav_color){
    case "red":
        echo "red is my fav color";
        break;

    case "blue":
        echo "blue is my fav color";
        break;

    case "green":
        echo "green is my fav color";
        break;
    
    default:
    echo "$fav_color is not my fav color";
    break;
    
}
?>