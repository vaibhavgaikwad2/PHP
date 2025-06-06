<form action="" method="post">
    <input type="text" name = "user" placeholder = "enter user name"/>
    <br />
    <br />
    <button name='button' value = "set">Set session </button>
    <br />
    <br />
    <button name='button' value = "display">Display session </button>
    <br />
    <br />
    <button name='button' value = "delete">Delete session </button>


</form>

<?php

// in cookie and session there is a difference data stored in browser in the form of cookie and data stored in the form of session on the server and session is more secure than cookie
//
session_start();
if(isset($_POST['button'])){
    if($_POST['button']=='set'){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }

    if($_POST['button']=='display'){
        echo $_SESSION['user'];
    }
    if($_POST['button']=='delete'){
        session_destroy();
    }
}
?>