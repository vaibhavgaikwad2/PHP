<?php
// this is basic method 
// $file = "C:/xampp\htdocs/tutorial\PHP/files/hello.txt";
// $myfile = fopen($file,'r') or die("unable to open the file");

// echo fread($myfile,filesize($file));

// fclose($myfile);

if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myfile=fopen($file,"r");

    echo fread($myfile,filesize($file));
    fclose($myfile);
}

?>

<form action ='' method="post" enctype = "multipart/form-data">
    <input type="file" name="file" />
    <br />
    <br />
    <button> read the file </button>
</form>

