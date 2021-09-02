<!-- Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum. -->

<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(4,6)." ";
echo test(6,6)." ";
echo test(11,14)." ";  