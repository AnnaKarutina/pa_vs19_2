<?php
/*
 * Koosta programm, mis hoiab muutujatena järgmised andmed
 * Eesnimi
 * Perenimi
 * Vanus
 * Pikkus meetrites
 * Kaal kilogrammides
 * Väljasta kõik vajalik info ka!
 * */
$eesNimi = 'Anna';
$pereNimi = 'Karutina';
$vanus = 38;
$pikkus = 1.62;
$kaal = 54;

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';

// arvutused
// $muutuja  = väärtus;
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindeks: '.$kmi.'<br>';

