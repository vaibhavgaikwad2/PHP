<?php

// use of static method and properties --> it can be call without creating object
// if method is called by multiple times then we use this keyword due to this code becomes fast and it call methods fastly as compared to by creating objects 
class Car{
    static public $CountryName='japan';
    static function Name(){ // statid function
        echo "honda";

    }
}

Car::Name();
echo "<br/>";
echo Car::$CountryName;

?>