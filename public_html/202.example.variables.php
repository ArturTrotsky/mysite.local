<?php

// Видео 2_02. Тема: "Переменные и их типы".
// Пример с урока.

$x = 5;
echo $x;
echo '<br />';
echo PHP_INT_MAX;
echo '<br />';

$d_1 = 1.5;
$d_2 = 9.8e5;
$d_3 = 9.8e-5;

echo "d_1 = $d_1; d_2 = $d_2; d_3 = $d_3<br />";

$s = 'My string';
echo $s;
echo '<br />';

$b_0 = false;
$b_1 = true;
echo "b_0 = $b_0; b_1 = $b_1<br />";

$obj = null;
echo "obj = $obj";
    
/* Array, Object, Resource, Callable будут рассмотрены позже */
