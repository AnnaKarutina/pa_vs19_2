<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$age = $_GET['age'];
$height = $_GET['height'];
$weight = $_GET['weight'];

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$firstName.'<br>';
echo 'Perenimi: '.$lastName.'<br>';
echo 'Vanus: '.$age.'<br>';
echo 'Pikkus(m): '.$height.'<br>';
echo 'Kaal(kg): '.$weight.'<br>';
echo '<br>';
$bmi = $weight / ($height * $height);
echo '<b>'.$firstName.' '.$lastName.'</b>, Sinu KMI on '.$bmi.'<br>';
echo '<br>';
echo '<a href="input.php">Proovi veel</a>';