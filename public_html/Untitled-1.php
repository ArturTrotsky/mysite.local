<?php
function factorial($a)
{
    if ($a < 2) {
        return 1;
    } else return $a * factorial($a - 1);
}
echo factorial(4);
echo PHP_EOL;

// Дано натуральное число n. Выведите все числа от 1 до n.
function oneToN($n)
{
    if ($n == 1) {
        echo "1";
        return;
    } else {
        echo $n;
        return oneToN($n - 1);
    }
}
oneToN(4);