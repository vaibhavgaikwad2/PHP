<form action="" method="post">
    <input type="text" name = "user" placeholder = "enter user name"/>
    <br />
    <br />
    <button name='button' value = "set">Set Cookies </button>
    <br />
    <br />
    <button name='button' value = "display">Display Cookies </button>
    <br />
    <br />
    <button name='button' value = "delete">Delete Cookies </button>


</form>


<?php

if(isset($_POST['button'])){
    if($_POST['button']=='set'){
    $val = $_POST['user'];
    //echo $val;
    setcookie("user",$val);
    echo "cookie is set";
    echo "<br>";

}

if($_POST['button']=="display"){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];

    }
}
if($_POST['button']=="delete"){
    if(isset($_COOKIE['user'])){
        setcookie("user",null,-1); // use this to delete cookie
    }
}
}


?>