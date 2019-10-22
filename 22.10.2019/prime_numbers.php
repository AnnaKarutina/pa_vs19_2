<?php
/**
 * file name: prime_numbers.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
// define function
function isPrime($number){
  if($number < 2) {
    $result = 'this number is not valid';
  } else {
    $divider = 2;
    while ($number % $divider != 0) {
      $divider++;
    }
    if($number == $divider) {
      $result = true;
    } else {
      $result = false;
    }
  }
  return $result;
}
function description($number) {
  echo $number;
  //  if(isPrime($number) == true){} is the same like next row
  if(isPrime($number) === true){
    echo ' is prime';
  } else if(isPrime($number) === false){
    echo ' is not prime';
  } else {
    echo ' - '.isPrime($number);
  }
  echo '<br>';
}
// use function
description(rand(0,99));