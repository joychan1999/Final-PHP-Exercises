<!-- Write a function to check whether a number is prime or not. -->
<?php
function IsPrime($n)
{
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) {
      return $n.' is not a Prime Number.....' . "\n";
    }
  }
  return $n.' is a Prime Number..' . "\n";
}

echo IsPrime(10)."<br>";
echo IsPrime(7)."<br>";

