<?php

// Пример присвоения анонимной функции переменной
$greet = function ($name) {
    printf("Привет, %s\r\n", $name);
};

$greet('Мир');
$greet('PHP');


// Наследование переменных из родительской области видимости
$message = 'привет';

// Без "use"
$example = function () {
    var_dump($message);
};
$example();

// Наследуем $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Значение унаследованной переменной задано там, где функция определена, 
// но не там, где вызвана
$message = 'мир';
$example();

// Сбросим message
$message = 'привет';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Измененное в родительской области видимости значение
// остается тем же внутри вызова функции
$message = 'мир';
echo $example();

// Замыкания могут принимать обычные аргументы
$example = function ($arg) use ($message) {
    var_dump($arg . ', ' . $message);
};
$example("привет");
