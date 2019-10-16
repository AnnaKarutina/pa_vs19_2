<?php
/**
 * file name: army.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */
$nation = $_GET['nation'];
$age = $_GET['age'];
$edu = $_GET['edu'];

if(strlen($nation) > 0 and strlen($age) > 0 and strlen($edu) > 0){
  if($nation != 'eestlane') {
    echo 'Kodakontsus ei sobi<br>';
  } else {
    if($age < 18) {
      echo 'Oled liiga noor<br>';
    } else {
      if($edu == 'pohi' or $edu == 'kesk' or $edu == 'korg' or $edu == 'kutse') {
        echo 'Kodakontsus - '.$nation.'<br>';
        echo 'Vanus - '.$age.'<br>';
        echo 'Haridus - '.$edu.'haridus<br>';
        echo 'Sobivus.';
      }
      else {
        echo 'haridustase ei ole sobilik<br>';
      }
    }
  }
} else {
  echo 'Tuleb lisada kõik väärtused';
}