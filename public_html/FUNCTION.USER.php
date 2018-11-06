<?php

/* Функция "even_to_space" принимает строку, а возвращает строку 
без символов (с пробелами) на чётных позициях.*/
function even_to_space(string $a)
{
    $lenght = strlen($a);
    for ($i = 1; $i <= $lenght; $i += 2) {
        $a[$i] = ' ';
    }
    return $a;
}
