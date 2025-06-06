<?php
// // to open a file use fopen(filename,"w,r");
// $file_name = "dummy.txt";
// $content = "this file is dummy";

// $file = fopen($file_name,"w") or die("unable to open the file");

// // fwrite function is used to erite something in file
// fwrite($file,$content);
// fclose($file);
// echo "file is created";

// handling file from html interface

// if(isset($_POST["filename"])){
//     $filename="files/".$_POST["filename"];
//     $content=$_POST["content"];

//     $file=fopen($filename,'w');
//     fwrite($file,$content);
//     fclose($file);
//     echo "file created successfully";
// }

//reading the file

// we use fread to read hte file

$file_path = "files/hello.txt";
$file = fopen($file_path,"r") or die("unable to open the file");

echo fread($file,filesize($file_path));
fclose($file);



?> 