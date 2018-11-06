<?php

// Видео 2_12. Тема: "Оператор switch-case".
// Домашнее задание.
// Мои наработки

echo 'Введите число:';

require_once 'form.enter.text.php';

// switchcase
$a = $_POST['text'];
switch ($a) {
    case 5:
        echo 'Вы ввели число пять';
        break;
    case 7:
        echo 'Вы ввели число семь';
        break;
    default:
        echo 'Нет такого числа (введите 5 или 7)';
}
