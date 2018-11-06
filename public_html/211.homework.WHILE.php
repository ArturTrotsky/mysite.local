<?php

// Видео 2_11. Тема: "Цикл while и do-while".
// Домашнее задание.
// Мои наработки

echo 'Введите число:';

require_once 'form.enter.text.php';

// while-dowhile

$age = $_POST['text'];
// Расчет факториала
if (!ctype_digit($age) || ($age < 0)) echo 'Введите положительное число';
else {
    $i = 1;
    $factorial = 1;
    while ($i <= $age) {
        $factorial = $factorial * $i;
        $i++;
    }
    echo "Факториал числа $age равен $factorial";
}


// Вычислите и выведите сумму чётных чисел от 10 до 40.
// То есть найдите сумму: 10 + 12 + 14 + 16 + … + 38 + 40
echo '<br />';
$begin = 10;
$i = $begin;
$end = 40;
$summa = 0;
while ($i <= $end) {
    $summa += $i;
    $i += 2;
}
echo "Сумма четных чисел от $begin до $end равна $summa";


// Вычислите и выведите сумму чётных чисел от 10 до 40.
// То есть найдите сумму: 10 + 12 + 14 + 16 + … + 38 + 40
echo '<br />';
$begin = 10;
$i = $begin;
$end = 40;
$summa = 0;
do {
    $summa += $i;
    $i += 2;
} while ($i <= $end);
echo "Сумма четных чисел от $begin до $end равна $summa";
