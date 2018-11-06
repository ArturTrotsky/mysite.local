<?php

// Видео 2_15. Тема: "Операции с массивами".
// Мои наработки. Домашнее задание.

$arr1 = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [8, 9, 10, 11, 12];
$arr = $arr1 + $arr2;
var_dump($arr);
    
// Вывод четных чисел массива arr
$i = 0;
while ($i < count($arr)) {
    if (($arr[$i] % 2) == 0)
        echo $arr[$i] . '<br />';
    $i++;
}

// Вывод четных чисел массива arr
echo '<br />';
foreach ($arr as $value) {
    if (!($value % 2)) echo $value . '<br />';
}

// Перевод массива в переменные
$arr = ['Sasha', 2, true, 11, 'Kolya'];
list($value1, $value2,, $value3) = $arr;
echo $value3;
