<?php
//PDO --> PHP Data Object
$host = "localhost";
$username = "root";
$password ="Vaibhav@123456";




try{
    $conn = new PDO("mysql:host=$host; dbname=institute",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection done";


}

catch(PDOException $err){
     echo "connection failed $err->getMessage()";
}
echo "<br>";
$result= $conn->query("SELECT * FROM student");
$data = $result->fetchAll(PDO::FETCH_ASSOC);
print_r($data);


?>