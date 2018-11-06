<?php

// Видео 2_24. Тема: "Инструкции include и require".
// Мои наработки. Домашнее задание.

/*Принимает строку, а возвращает строку без символов на чётных позициях.
Поместите эту функцию в отдельный файл и отправьте этот файл в директорию lib
рядом с index.php. В index.php подключите этот файл и воспользуйтесь
написанной функцией при обработке формы.*/

declare (strict_types = 1);
require_once 'form.enter.text.php';
require_once 'function.user.php';

$text = $_POST['text'];
$text_even = even_to_space($text);
if ($text) {
    echo "Выведем строку \"$text\", заменив четные символы пробелами: \"$text_even\".";
}
