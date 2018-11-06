<?php

// Видео 2_10. Тема: "Цикл for".
// Домашнее задание.
// Мои наработки

echo 'Введите число:';

require_once 'form.enter.text.php';

// for
$age = $_POST['text'];
if (!ctype_digit($age) || ($age < 0)) echo 'Введите число больше нуля';
else {
    $factorial = 1;
    for ($i = 1; $i <= $age; $i++) {
        $factorial = $factorial * $i;
    }
    echo "Факториал числа $age равен $factorial";
}

// Пример for с использованием continue и break
echo '<br />';
$factorial = 1;
for ($i = 1; $i <= $age; $i++) {
    if ($i == 5) continue;
    $factorial = $factorial * $i;
    if ($i == 10) break;
}
echo "Факториал числа $age (которое меньше 10 и без учета 5) равен $factorial";
