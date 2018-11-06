<?php

// Передача аргументов по ссылке
function add_some_extra(&$string)
{
    $string .= 'и кое-что еще.';
}
$str = 'Это строка, ';
add_some_extra($str);
echo $str;    // выведет 'Это строка, и кое-что еще.'


// Использование значений по умолчанию в определении функции
function makecoffee($type = "капучино")
{
    return "Готовим чашку $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("эспрессо");


// Корректное использование значений по умолчанию
function makeyogurt($flavour, $type = "ацидофил")
{
    return "Готовим чашку из бактерий $type со вкусом $flavour.\n";
}

echo makeyogurt("малины");   // отрабатывает правильно


// Строгая типизация
// declare(strict_types=1);

function sum1(int $a, int $b)
{
    return $a + $b;
}

var_dump(sum1(1, 2));
var_dump(sum2(1.5, 2.5));


// Использование ... для доступа к аргументам
function sum2(...$numbers)
{
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum2(1, 2, 3, 4);


// Использование ... для передачи аргументов
function add($a, $b)
{
    return $a + $b;
}

echo add(...[1, 2]) . "\n";

$a = [1, 2];
echo add(...$a);


// Доступ к аргументам в PHP 5.5 и ранних версий
function sum()
{
    $acc = 0;
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);


// Использование конструкции return
function square($num)
{
    return $num * $num;
}
echo square(4);   // выводит '16'.


// Возврат нескольких значений в виде массива
function small_numbers()
{
    return array(0, 1, 2);
}
list($zero, $one, $two) = small_numbers();


// Возврат результата по ссылке
function &returns_reference()
{
    return $someref;
}

$newref = &returns_reference();


// Обычное объявление типа возвращаемого значения
function sum4($a, $b) : float
{
    return $a + $b;
}

// Будет возвращаться значение типа float.
var_dump(sum4(1, 2));


// Работа с функциями посредством переменных
function foo()
{
    echo "В foo()<br />\n";
}

function bar($arg = '')
{
    echo "В bar(); аргумент был '$arg'.<br />\n";
}

// Функция-обертка для echo
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // Вызывает функцию foo()

$func = 'bar';
$func('test');  // Вызывает функцию bar()

$func = 'echoit';
$func('test');  // Вызывает функцию echoit()