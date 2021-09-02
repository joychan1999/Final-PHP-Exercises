<!-- Write a PHP function that checks whether a string is all lowercase. -->
<?php
function IsLowercase($str1)
{
    if (ctype_lower($str1)) {
        echo "all characters in the string are in lower case <br>";
    } else {
        echo "not all characters in the string are  in lower case <br>";
    }
}

IsLowercase("joselito");
IsLowercase("joselito1");
IsLowercase("joselitO");
?>