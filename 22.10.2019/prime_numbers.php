<?php
/**
 * file name: prime_numbers.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function
function isPrime($number){
  if($number < 2) {
    return 'This number is not valid';
  } else {
    $divider = 2;
    while ($number % $divider != 0) {
      $divider++;
    }
    if($number == $divider) {
      return $number.' is prime number<br>';
    } else {
      return $number.' is not a prime number<br>';
    }
  }
}
// use function
$result = isPrime(rand(0, 99));
echo $result;