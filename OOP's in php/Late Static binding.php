<?php

/*allows a static method to refer to the called class (not the class where it is defined) 
using static:: instead of self::, enabling proper inheritance behavior in static contexts. 
*/
class CountrySale{
    static public $totalsale=100;
    function getTotalsale(){
        echo self::$totalsale;
        echo "<br/>";
        echo "late binding ex: ";
        echo static::$totalsale;
    }
}
class CitySale extends CountrySale{
    static public $totalsale=50;
}

$city = new CitySale();

$city->getTotalsale();
?>