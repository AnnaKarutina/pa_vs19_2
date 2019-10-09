# Päeva teemad
## Operaatorid
### Aritmeetilised operaatorid
* liitmine
```
<?php
$x = 2;
$y = 3;
$summa = $x + $y;
?>
```
* lahutamine
```
<?php
$x = 2;
$y = 3;
$vahe = $x - $y;
?>
```
* korrutamine
```
<?php
$x = 2;
$y = 3;
$korrutis = $x * $y;
?>
```
* jagamine
```
<?php
$x = 2;
$y = 3;
$jagatis = $x / $y;
?>
```
* jäägi leidmine
```
<?php
$x = 2;
$y = 3;
$jaak = $x % $y;
?>
```
### Suurendamine ++ / Vähendamine -- (1 võrra)
* post
```
<?php
$x = 2;
$x++;
echo $x;
?>
```
* pre
```
<?php
$x = 2;
++$x;
echo $x;
?>
```
### Suurendamine / Vähendamine 2 jne võrra (lahutamine, korrutamine jne)
* suurendamine
```
<?php
$x = 2;
$x += 2; // $x = $x + 2;
echo $x;
?>
```
* vähendamine
```
<?php
$x = 2;
$x -= 2; // $x = $x - 2;
echo $x;
?>
```
* korrutamine
```
<?php
$x = 2;
$x *= 2; // $x = $x * 2;
echo $x;
?>
```
* jagamine
```
<?php
$x = 2;
$x /= 2; // $x = $x / 2;
echo $x;
?>
```
* jääki leidmine
```
<?php
$x = 2;
$x %= 2; // $x = $x % 2;
echo $x;
?>
```
### Vormindatud väljund
* printf funktsiooni abil:
```
<?php
printf('formaadisõne koos lisatekstiga', $muutuja1, $muutuja2, ..., $muutujaN);
?>
```
* Võimalikud formaadid
```
%s    - string - sõne
%d    - decimal - täisarv
%f    - float - komaga arv
%c    - char - sümbol
%3.2f - komaga arv, kus on 3 täiskohta ja 2 komakohta
```
## Kodune ülesanne
* [https://www.metshein.com/course/php-alused/](https://www.metshein.com/course/php-alused/) - PHP – Matemaatilised tehted - Ülesanne 2 ->
* Koosta kood, mis teisendab Celsius-kraadid Fahrenheiti. Kasuta valemit: F=(9/5)*C+32. Vastus vormindatakse 2 kohta pärast koma.