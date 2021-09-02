<!-- Create a script to construct the following pattern, using a nested for loop. -->
<?php
$a = 5;
for ($i = 1; $i <= $a; $i++) {
    for ($x = 1; $x <= $i; $x++) {
        echo " * " ;
    }
    echo "<br>"  ;
}
for ($i = 1; $i <= $a; $i++)
{
    for ($j = 1; $j <= 5 - $i; $j++)
    {
        echo ' * ';
    }
 
    echo "<br>";
}
?>