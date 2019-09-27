<?php
// circle_do.php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
//var_dump($circleRadius);
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = 3.14 * 2 * $circleRadius;
// print
echo 'Raadius = '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea.'<br>';
echo 'Ringi ümbermõõt = '.$circleCircumference.'<br>';