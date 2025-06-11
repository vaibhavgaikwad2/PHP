<?php

// print_r($_POST);
// echo "<br/>";
// print_r($_POST['skills']);


if(isset($_POST)){
    echo "Username is ". $_POST['name'];
    echo "<br/>";
    echo "Email id is ". $_POST['email'];
    echo "<br/>";
    echo "Skills :". implode(", ",$_POST['skills']);
    echo "<br/>";
    echo "Gender :". $_POST['gender'];
    echo "<br/>";
    echo "City :". $_POST['city'];
    echo "<br/>";
    echo "Bio :" . $_POST['bio'];

};

?>