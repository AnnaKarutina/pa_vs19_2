<?php
/**
 * file name: abs.php;
 * autor: anna.karutina;
 * date: 10.10.2019;
 */
// absolute value computing
// define variable
$number = 15;
// if number is negative
if ($number < 0) {
  $abs = $number * -1;
} else {
  $abs = $number;
}
echo $number.' absoluutväärtus on '.$abs;