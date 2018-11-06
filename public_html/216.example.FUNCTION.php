<?php

// Видео 2_16. Тема: "Функции".
// Пример с урока.

//declare(strict_types = 1);

function hello()
{
    echo 'hello<br />';
}
function helloCount($count = 5)
{
    if (!is_int($count)) {
        echo 'Ошибка в параметре. count должен быть целым!<br />';
        return;
    }
    for ($i = 0; $i < $count; $i++) hello();
}
function summa($a, $b, $return = false)
{
    if ($return) return ($a + $b);
    echo "$a + $b = " . ($a + $b);
}
function getSumma($a, $b)
{
    $summa = $a + $b;
    return $summa;
}
function summaN()
{
    if (func_num_args() == 0) {
        echo 'Необходимы параметры!';
        return;
    };
    $summa = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $arg = func_get_arg($i);
        if (!is_numeric($arg)) {
            echo 'Параметры должны быть числами!';
            return;
        }
        $summa += $arg;
    }
    return $summa;
}

helloCount(10);
helloCount("FSDF");
helloCount();
summa(5, -3);

echo '<br />';
$summa = getSumma(10, 5);
echo $summa;
echo '<br />';
function change(&$x)
{
    $x++;
}
$a = 5;
change($a);
echo $a;
echo '<br />';
echo summaN(5, 7, 10, 15, 0, -5, 10, '5');
echo '<br />';
echo summaN();
echo '<br />';
echo summaN(5, 7, 'sdfsdf');

function diff(int $a, int $b) : int
{
    return $a - $b;
}
echo '<br />';
echo diff(10, 5);
echo '<br />';
echo diff(6.1, 5.8);
