<?php

//It is super global variable, defined by php we can use it from anywhere
// it is used to get data from GET and POST req



//print_r($_REQUEST);


//using loop 

foreach($_REQUEST as $key => $data){
   
    echo "$key => $data";
    echo "<br>";
   
    

}


?>