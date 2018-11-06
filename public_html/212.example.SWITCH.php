<?php

// Видео 2_12. Тема: "Оператор switch-case".
// Пример с урока.

$x = 2.5;
if (gettype($x) == "string") echo 'x - это строка';
elseif (gettype($x) == "integer") echo 'x - это целое число';
elseif (gettype($x) == "boolean") echo 'x - это boolean';
else echo 'x - это неизвестный тип';
echo '<br />';
switch (gettype($x)) {
    case "string":
        echo 'x - это строка';
        break;
    case "integer":
        echo 'x - это целое число';
        break;
    case "boolean":
        echo 'x - это boolean';
        break;
    default:
        echo 'x - это неизвестный тип';
}
echo '<br />';
$a = 2;
$b = 2;
switch ($a <=> $b) {
    case 0:
        echo "$b = $a";
        break;
    case 1:
        echo "$a > $b";
        break;
    case -1:
        echo "$a < $b";
}

echo '<br />';
switch (gettype($x)) :
    case "string":
    echo 'x - это строка';
    break;
case "integer":
    echo 'x - это целое число';
    break;
case "boolean":
    echo 'x - это boolean';
    break;
default:
    echo 'x - это неизвестный тип';
endswitch;
