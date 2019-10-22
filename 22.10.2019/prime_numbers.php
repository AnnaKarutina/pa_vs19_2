<?php
/**
 * file name: prime_numbers.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function
function isPrime($number){
  if($number < 2) {
    echo 'This number is not valid';
  } else {
    $divider = 2;
    while ($number % $divider != 0) {
      $divider++;
    }
    if($number == $divider) {
      echo $number.' is prime number<br>';
    } else {
      echo $number.' is not a prime number<br>';
    }
  }
}
// use function
isPrime(rand(0, 99));