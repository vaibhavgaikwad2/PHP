<?php

echo "include";
include("./childfile.php");   // use this when this file's code is used for multiple times or wanted to load for multiple times otherwise use this include_once
echo "<br>";
echo "<hr>";

echo "include_once use";
echo "<br>";
include_once("./childfile2.php");


?>