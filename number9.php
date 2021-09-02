<!-- Write a PHP function to convert Arabic Numbers to Roman Numerals. -->
<?php
function numberToRomanNumerals($number)
{
    $value = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $romanValue = '';
    while ($number > 0) {
        foreach ($value as $roman => $int) {
            if ($number >= $int) {
                $number -= $int;
                $romanValue .= $roman;
                break;
            }
        }
    }
   echo "It's roman numeral value is ". $romanValue;
}

numberToRomanNumerals(201);