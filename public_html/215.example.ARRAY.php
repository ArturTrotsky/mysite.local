<?php

// Видео 2_15. Тема: "Операции с массивами".
// Пример с урока.

$arr = ['Michael', 'Rusakov', 26];
$firstname = $arr[0];
$surname = $arr[1];
$age = $arr[2];

echo "$firstname, $surname, $age";

list($firstname, $surname, $age) = $arr;

echo "<br />$firstname, $surname, $age";

list(, $surname, $age) = $arr;

echo "<br />$surname, $age<br />";

$arr_1 = ['name_1' => 'Michael', 'name_2' => 'Igor'];
$arr_2 = ['name_3' => 'Alex', 'name_4' => 'Homer'];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) echo $value . ', ';
echo '<br />';
$arr_1 = ['name_1' => 'Michael', 'name_2' => 'Igor'];
$arr_2 = ['name_1' => 'Alex', 'name_2' => 'Homer', 'name_3' => 'Bart'];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) echo $value . ', ';

echo '<br />';
echo "Элемент равен {$arr_1['name_1']}";
