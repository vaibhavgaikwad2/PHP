<?php

if(isset($_POST['user'])){
    class User{
        function getName(){
            echo "User name is $_POST['user']";
        }
    }

    $user=new User();
    $user->getName();
}

?>

<form action ="" method="post">
    <input type="text" name="user" placeholder="enter username">
    <br/>
    <br/>
    <button>click</button>


</form>