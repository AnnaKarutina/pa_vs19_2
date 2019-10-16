<?php
/**
 * file name: asteriks_table.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 */
for($row = 1; $row < 6; $row++) {
  echo $row;
//  spaces
  for($col = 1; $col < (6-$row); $col++) {
    echo '&nbsp;&nbsp;&nbsp;';
  }
//  asterikses
  for($col = 1; $col <= $row; $col++) {
    echo '*&nbsp;';
  }
  echo '<br>';
}