<?php

// it deals with files operations
echo "<pre>"; 
print_r($_FILES);
echo "<pre>";
if($_FILES['fileupload']){

    $path = $_FILES['fileupload']['name'];
    $upload_path = "./uploads/".$path;
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$upload_path); // --> this function is used to move or saved files in particular folder
}

else{
    die("No file found");
}

?>