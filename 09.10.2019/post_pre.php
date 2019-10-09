<?php
/**
 * file name: post_pre.php;
 * autor: anna.karutina;
 * date: 09.10.2019;
 */
//suurendamine ühe võrra
$x = 10;
$y = ++$x; //sama mis $x = $x + 1
echo 'x = '.$x.'<br>';
echo 'y = '.$y;