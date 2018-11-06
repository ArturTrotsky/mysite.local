<?php

// Видео 2_09. Тема: "Оператор if-else".
// Пример с урока.

$x = 7;
if ($x < 10) echo 'x меньше 10';
else echo 'x больше или равен 10';
echo '<br />';
if ($x < 7) echo 'x меньше 7';
elseif ($x > 7) echo 'x больше 7';
else echo 'x равен 7';
echo '<br />';

$a = 5;
$b = 3;
if ($a < $b || $b == 3) echo 'Истина';
else echo 'Ложь';
    
    /* Следующие строки НЕ безопасны! Однако, на данный момент это не критично. */

if (isset($_GET['com'])) $com = $_GET['com'];
else $com = false;

$com = isset($_GET['com']) ? $_GET['com'] : false;

$com = $_GET['com'] ?? false;
echo '<br />';
if ($com == 'add') {
    $summa = $a + $b;
    echo "$a + $b = $summa";
} elseif ($com == 'mult') {
    $mult = $a * $b;
    echo "$a * $b = $mult";
} elseif ($com) echo 'Неизвестная операция!';

?>
<div>
    <a href="?com=add">Сложить</a>
    <a href="?com=mult">Перемножить</a>
</div>