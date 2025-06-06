<?php

echo "This file is loaded only once due to include_once ";
echo "<br>";
for($i=0; $i<10; $i++){
    echo $i;
    echo "<br>";
}

?>