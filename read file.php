<?php

$file = "files/hello.txt";
$myfile = fopen($file,'r') or die("unable to open the file");

echo fread($myfile,filesize($file));

fclose($myfile);



?>