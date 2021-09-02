<!-- Write a PHP script to calculate the difference between two dates. -->
<?php
$firstDate = "1974-02-02"; //papas bday
$SecondDate = "2021-09-02"; //currents date

$DateDifference = abs(strtotime($SecondDate) - strtotime($firstDate));

$years = floor($DateDifference / (365 * 60 * 60 * 24));
$months = floor(($DateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days = floor(($DateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

printf("%d years, %d months, %d days", $years, $months, $days);
?>