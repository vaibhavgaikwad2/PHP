<?php
for($i=1; $i<=10; $i++){
    

    if($i==3 || $i==7){
        continue;
    }
    elseif($i==9){
        break;
    }

     echo $i;
    echo "<br>";






    //to execute this loop you have to declare this statements before the actual statements
    
}   
?>