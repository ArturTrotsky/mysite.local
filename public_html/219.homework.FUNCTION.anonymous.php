<?php

// Видео 2_19. Тема: "Анонимные функции".
// Мои наработки. Домашнее задание.

// Создайте анонимную функцию и поместите её в переменную.
// Функция должна просто возвращать сумму двух переданных параметров.
// Вызовите эту анонимную функцию с помощью переменной.
$sum = function ($x, $y) {
    return $x + $y;
};
echo $sum(5, 3);
echo '<br />';
// Создайте ещё одну функцию, которая принимает массив с чётным количеством
// элементов в виде чисел, а также принимает вторым параметром функцию.
// Внутри этой функции перебирайте сразу по 2 элемента в массиве и выводите результат
// вызова переданной функции, передавая ей по 2 этих элемента.
