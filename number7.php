<!-- Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.  -->
<?php
$myBirthday = mktime(0, 0, 0, 12, 24, 2020); 
$today = time();
$diff_days = ($myBirthday - $today);
$days = (int)($diff_days / 86400)*-1;
print "Your next birthday will be in: ".$days ." days from now!" ;
?>