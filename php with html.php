<?php

echo " <h1 style='color:green'>PHP with HTML</h1>";
echo " <h3 style='color:green'>hello world</h3>";

?>

<?php
$name = "Vaibhav";
$h2_color = "red";
echo " <h2 style='color:green'>my name is $name</h2>";

?>

<h1 style="color: red;">
    My real name is <?php echo $name; ?>
</h1>

<h2 style="color:<?php echo $h2_color; ?>">Hii</h2>
<h2 style="color:<?php echo $h2_color; ?>">Hello</h2>
<h2 style="color:<?php echo $h2_color; ?>">thank you</h2>

