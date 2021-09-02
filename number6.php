<!-- Write a PHP function that checks whether a passed string is a palindrome -->

<?php
function PalindromeCheck($string)
{
    $finalString = strtoupper($string);
    if (strrev($finalString) == $finalString) {
        echo "Palindrome <br>";
    } else {
        echo "Not a Palindrome <br>";
    }
}

PalindromeCheck("Dad");
PalindromeCheck("Da1ad");
?>