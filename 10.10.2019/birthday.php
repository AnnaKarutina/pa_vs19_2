<?php
/**
 * file name: birthday.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */

$birthYear = $_GET['birthYear'];

if(strlen($birthYear) > 0) {
  $age = 2019-$birthYear;
  if ($age % 5 == 0) {
    echo 'Sul on juubel, oled '.$age.' aastat vana';
  } else {
    echo 'Sul on tava sünnipäev, oled '.$age.' aastat vana';
  }
}