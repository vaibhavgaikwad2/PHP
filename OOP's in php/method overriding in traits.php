<?php

trait ParentCompany{
    function getEmp(){
        echo 200;
    }
}
trait ParentCompany2{
    function getEmp(){
        echo 300;
    }
}

class Company{
    use ParentCompany;
    use ParentCompany2{
        ParentCompany::getEmp insteadOf ParentCompany2;
    }



    // this class is inherited by two classes and have similar name function so it get s confused and gives error
    // basically it cannot not decides which method should be displayed because of having same name
}
 $c1= new Company();
    $c1->getEmp();

?>