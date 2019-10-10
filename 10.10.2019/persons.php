<?php
/**
 * file name: persons.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// define variables
$age = 75;
echo 'Vanus = '.$age.'<br>';
if($age > 0 and $age < 18) {
  // 0 - 17 - laps
  echo 'Oled laps<br>';
} else if($age > 17 and $age < 66) {
  // 18 - 65 - täiskasvanu
  echo 'Oled täiskasvanu<br>';
} else if($age > 65) {
  // 66 > - senioor
  echo 'Oled senioor<br>';
} else {
  echo 'midagi on valesti<br>';
}