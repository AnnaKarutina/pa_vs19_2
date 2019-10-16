<?php
/**
 * file name: asteriks_table.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */
for($row = 1; $row < 6; $row++) {
  echo $row;
  for($col = 1; $col < 6; $col++) {
    echo '*&nbsp;';
  }
  echo '<br>';
}