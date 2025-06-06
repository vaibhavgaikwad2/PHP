<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button click function</title>
</head>
<body>
    <form action="" method = "post"> 
        <button name ="btn" value = "btn1">call function </button>
</form>   
</body>
</html>

<?php 

//we can call function on click of button from html page
if(isset($_POST['btn'])){ // --> isset is to check there is any kind of request from particular button and in this name of btn is passed as parameter
    btn_click_test();  //--> name of function who is going to called on click of button
}

function btn_click_test(){
    echo "function is called on button click";
}


?>