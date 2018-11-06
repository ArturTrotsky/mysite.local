<?php

// Видео 2_09. Тема: "Оператор if-else".
// Домашнее задание.
// Мои наработки

echo 'Введите Ваш возраст:';

require_once 'form.enter.text.php';

$age = $_POST['text'];
if (!ctype_digit($age) || ($age <= 0)) echo 'Должно быть число > 0, 
    попробуйте снова';
elseif ($age > 30) echo "Вам $age лет, это больше 30 лет";
elseif ($age == 30) echo 'Вам 30 лет';
else echo "Вам $age лет, это меньше 30 лет";
