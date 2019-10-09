<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    table, th, td {
      border: 1px solid #333;
      border-collapse: collapse;
    }
    th, td {
      padding: 0.5rem;
      text-align: center;
    }
    th {
      background: orange;
    }
    tr:nth-child(even) {
      background: #f4f4f4;
    }
  </style>
  <title>Operators</title>
</head>
<body>

<?php
/**
 * file name: arithmetics.php;
 * autor: anna.karutina;
 * date: 09.10.2019;
 */
// define variables
use http\Message\Body;

$x = 8;
$y = 2;
// additional variables
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$divide = $x / $y;
$residual = $x % $y;
// output table
echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>   
                <th>Nimetus</th>   
                <th>Näide</th>   
                <th>Tulemus</th>   
            </tr>
        </thead>
        <tbody>
            <!-- sum -->
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>'.$x.' + '.$y.'</td>
                <td>'.$sum.'</td>
            </tr>
            <!-- difference -->
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$diff.'</td>
            </tr>
            <!-- product -->
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$product.'</td>
            </tr>
            <!-- divide -->
            <tr>
                <td>x / y</td>
                <td>Jagamine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$divide.'</td>
            </tr>
            <!-- residual -->
            <tr>
                <td>x % y</td>
                <td>Jääk</td>
                <td>'.$x.' % '.$y.'</td>
                <td>'.$residual.'</td>
            </tr>
        </tbody>
    </table>
';
?>
</body>
</html>
