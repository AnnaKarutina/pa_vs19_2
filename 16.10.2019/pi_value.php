<?php
/**
 * file name: pi_value.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */
$maxCount = 100000000; // max count on element
$count = 1; // loop count value
$sum = 0; // sum of elements
while ($count <= $maxCount) {
  // create element
  $element = 1 / (2 * $count - 1);
  // if count is odd +
  if($count % 2 != 0) {
    $sum = $sum + $element;
  } else {
    // if count is even -
    $sum = $sum - $element;
  }
  // increase element number - count
  $count++;
}
echo 'pi = '.($sum * 4).'<br>';
echo 'pi = '.pi();
