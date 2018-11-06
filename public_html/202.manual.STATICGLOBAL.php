<?php

$a = 1;
include 'b.inc'; // переменная $a будет доступна внутри включенного скрипта b.inc

function test()
{
    echo $a; /* ссылка на переменную в локальной области видимости */
}

test();

// Использование global
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
echo $b;

// Использование $GLOBALS вместо global
$a = 1;
$b = 2;

function Sum2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum2();
echo $b;

// Пример использования статических переменных
function test3()
{
    static $a = 0;
    echo $a;
    $a++;
}

// Статические переменные и рекурсивные функции
function test2()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test2();
    }
    $count--;
}
echo '<br />';
test2();

// Объявление статических переменных
function foo()
{
    static $int = 0;          // верно
    static $int = 1 + 2;        // верно (начиная с PHP 5.6)
   // static $int = sqrt(121);  // неверно (поскольку это функция)

    $int++;
    echo $int;
}
