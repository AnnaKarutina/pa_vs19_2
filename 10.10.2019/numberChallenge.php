<?php
/**
 * file name: numberChallenge.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */

$number = 25;
$numberFromUser = $_GET['number'];

if(strlen($numberFromUser) > 0){
  // number is ok
  if($numberFromUser == $number) {
    echo 'Arvasid ära, number on '.$number.'!';
  } else {
    // compute the difference
    $diff = abs($numberFromUser - $number);
    if ($diff <= 5) {
      echo 'Tubli, peaaegu arvasid ära! Aga, ';
    }
    // if number is not close
    if ($numberFromUser > $number) {
      echo 'Pakutud number on liiga suur';
    } else {
      echo 'Pakutud number on liiga väike';
    }
  }
} else {
  echo 'Tuleb pakkuda number!';
}