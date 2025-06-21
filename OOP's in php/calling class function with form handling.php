<form action ="" method="post">
    <input type="text" name="user" placeholder="enter username">
    <br/>
    <br/>
    <button>click</button>
</form>

<?php

if(isset($_POST['user'])){
    class User{
        function getName($name){
            echo "User name is $name";
        }
    }

    $user=new User();
    $user->getName($_POST['user']);
}

?>
