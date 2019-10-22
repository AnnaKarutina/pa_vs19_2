<?php
/**
 * file name: table.php;
 * autor: anna.karutina;
 * date: 22.10.2019;
 */
function randomColor(){
  $color = '#';
  for($count = 1; $count <= 6; $count++){
    $color = $color.dechex(rand(0,15));
  }
  return $color;
}
function tableRow($colNumber){
  echo '<tr>';
    for($col = 1; $col <= $colNumber; $col++){
      echo '<td style="background: '.randomColor().'">';
      echo 'cell';
      echo '</td>';
    }
  echo '</tr>';
}
function tableHeader($colNumber){
  echo '<thead>';
    echo '<tr>';
      for($col = 1; $col <= $colNumber; $col++){
        echo '<th>';
        echo 'header';
        echo '</th>';
      }
    echo '</tr>';
  echo '</thead>';
}
function table($rowNumber, $colNumber){
  echo '<table>';
    tableHeader($colNumber);
    echo '<tbody>';
    for($row = 1; $row <= $rowNumber; $row++){
      tableRow($colNumber);
    }
    echo '</tbody>';
  echo '</table>';
}
table(5, 4);