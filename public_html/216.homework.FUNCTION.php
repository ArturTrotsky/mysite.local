<?php

// Видео 2_16. Тема: "Функции".
// Мои наработки. Домашнее задание.

function getSumma() // Объявление функции без обязательных аргументов
{
    $summa = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $summa += func_get_arg($i);
    }
    echo $summa;
}
getSumma(1, 2, 3);
echo '<br />';

function getArr($arr) // Объявление функции аргументом которой является массив
{
    $summa = 0;
    if (gettype($arr) == 'array' && count($arr) > 0) {
        foreach ($arr as $value) {
            if (!is_numeric($value)) {
                echo 'В массиве есть элементы не являющиеся числами';
                return;
            } else $summa += $value;
        }
        echo $summa;
    } else echo 'Аргумент должен быть массивом c числами';
}
$kkk = [5, '4t'];
getArr($kkk);

function funcN1() // Объявление функции без аргумента
{
    echo '<br />Hello';
}
funcN1();
echo '<br />';

function funcN2($count) // Объявление функции с аргументом
{
    for ($i = 0; $i < $count; $i++)
        echo '<br />Hello';
}
funcN2(5);
echo '<br />';

function funcN3($count = 10) // Объявление функции с аргументом по умолчанию равным 10
{
    for ($i = 0; $i < $count; $i++)
        echo '<br />Hello';
}
funcN3();
echo '<br />';

function getSum($r, $u) // Пример функции, которая возвращает значение
{
    $sum = $r + $u;
    return $sum;
}
$result = getSum(11, 24);
echo '<br />' . $result;

    // Пример объявления функции и вызова функции
echo '<br />';
function Test($var)
{
    echo "This is $var";
}
$f = "Test";
$f('variable function'); // Выводит на экран This is variable function

echo '<br />';
Test('ky ky');
