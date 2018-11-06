<?php

// Видео 2_19. Тема: "Анонимные функции".
// Пример с урока.

$hello = function ($string) {
    echo "$string<br />";
};

$hello('World');
echo gettype($hello);
echo '<br />';

function test($a, $func)
{
    $arr = [];
    for ($i = 0; $i < $a; $i++) {
        $arr[] = $func($i);
    }
    return $arr;
}

$arr = test(10, function ($x) {
    return $x * $x;
});

foreach ($arr as $v) echo $v . ", ";
