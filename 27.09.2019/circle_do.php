<?php
// circle_do.php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
//var_dump($circleRadius);
// arvutused
$circleArea = pi() * $circleRadius * $circleRadius;
$circleCircumference = pi() * 2 * $circleRadius;
// ümmardamine ja omistamine
//$circleAreaRounded = round($circleArea, 3);
// ümmardamine ja ümber kirjutamine
$circleArea = round($circleArea, 3);
// print
echo 'Raadius = '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea.'<br>';
echo 'Ringi ümbermõõt = '.$circleCircumference.'<br>';