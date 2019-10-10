<?php
/**
 * file name: persons.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// define variables
$age = 5;
echo 'Vanus = '.$age.'<br>';
// 0 - 17 - laps
if($age > 0 and $age < 18) {
  echo 'Oled laps<br>';
}
// 18 - 65 - täiskasvanu
if($age > 17 and $age < 66) {
  echo 'Oled täiskasvanu<br>';
}
// 66 > - senioor
if($age > 65) {
  echo 'Oled senioor<br>';
}