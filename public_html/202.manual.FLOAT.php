<?php
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
echo $b;
echo '<br />';

// Сравнение чисел с плавающей точкой
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00000001;

if (abs($a - $b) < $epsilon) {
    echo "true";
} else echo 'false';
echo '<br />';

if ($a > $b) {
    echo "true";
} else echo 'false';
