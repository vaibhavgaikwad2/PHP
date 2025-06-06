<?php

$file = "C:/xampp\htdocs/tutorial\PHP/files/hello.txt";
$myfile = fopen($file,'r') or die("unable to open the file");

echo fread($myfile,filesize($file));

fclose($myfile);



?>