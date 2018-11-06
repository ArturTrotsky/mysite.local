<?php

// Видео 2_14. Тема: "Цикл foreach".
// Домашнее задание.
// Мои наработки.

$arr = [
    [
        'name' => 'Alex',
        'age' => 22
    ],
    [
        'name' => 'Jonh',
        'age' => 33
    ],
    [
        'name' => 'Mick',
        'age' => 44
    ]
];
    
// Вычисление среднего age    
$sum = 0;
$i = 0;
foreach ($arr as $value) {
    foreach ($value as $key => $j) {
        if ($key == 'age') {
            $sum += $j;
            $i++;
        }
    }
}
echo 'Средний возраст равен ' . ($sum / $i);
echo '<br />';

// Перебор двумерного массива
$arr2 = [[1, 3], [3, 6]];
foreach ($arr2 as $v) {
    foreach ($v as $k) echo '<br />' . $k;
}

// Преребор двумерного массива и вывод среднего каждого подмассива
echo '<br />';
$arr3 = [[1, 3], [3, 6]];
foreach ($arr3 as $v) {
    $sum = 0;
    for ($i = 0; $i < count($v); $i++) {
        $sum += $v[$i];
    }
    $aver = $sum / count($v);
    echo '<br />' . $aver;
}
