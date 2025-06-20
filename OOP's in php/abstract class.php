<?php

/*
it is an template that defines methods for child classes
in abstract class we declare methods but write implementations in child class
we cannot create object of abstract class but we can create object for its child class
*/
abstract class ProductFeatures{
    abstract function ProductDetails();
    abstract function ProductImages(); 
}

class UploadProducts extends ProductFeatures{
    function ProductDetails(){
        echo "this is product details";
    }
    function ProductImages(){
        echo "this is product Images";
    }
}

$product1=new UploadProducts();
$product1->ProductDetails();
echo "<br/>";
$product1->ProductImages();

?>