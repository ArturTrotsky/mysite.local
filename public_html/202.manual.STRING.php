<?php
error_reporting(E_ALL);
echo 'это простая строка';
echo '<br />';

echo 'Также вы можете вставлять в строки
символ новой строки вот так,
это нормально';
echo '<br />';

// Выводит: Однажды Арнольд сказал: "I'll be back"
echo 'Однажды Арнольд сказал: "I\'ll be back"';
echo '<br />';

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\\*.*?';
echo '<br />';

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\*.*?';
echo '<br />';

// Выводит: Это не будет развернуто: \n новая строка
echo 'Это не будет развернуто: \n новая строка';
echo '<br />';
// Выводит: Переменные $expand также $either не разворачиваются
echo 'Переменные $expand также $either не разворачиваются';
echo '<br />';

$juice = "apple";

echo "He drank some $juice juice." . PHP_EOL;

// Некорректно. 's' - верный символ для имени переменной, но переменная имеет имя $juice.
echo "He drank some juice made of $juices.";

// Корректно. Строго указан конец имени переменной с помощью скобок:
echo "He drank some juice made of ${juice}s.";

// Отрицательные числовые индексы
$string = 'string';
echo "Символ с индексом -2 равен {$string[-2]}.", PHP_EOL; // Символ с индексом -2 равен n.
$string[-3] = 'o';
// Изменение символа на позиции -3 на 'o' дает следующую строку: strong.
echo "Изменение символа на позиции -3 на 'o' дает следующую строку: $string.", PHP_EOL;

echo '<br />';
$arr = ['key' => 5];
echo "Это работает: {$arr['key']}" . PHP_EOL;

echo '<br />';
$name = 1001;
echo "Это значение переменной по имени $name: {${$name}}";


// Получение первого символа строки
$str = 'This is a test.';
$first = $str[0];

// Получение третьего символа строки
$third = $str[2];

// Получение последнего символа строки
$str = 'This is still a test.';
$last = $str[strlen($str) - 1]; 

// Изменение последнего символа строки
$str = 'Look at the sea';
$str[strlen($str) - 1] = 'e';

$foo = 1 + "10.5";                // $foo это float (11.5)
$foo = 1 + "-1.3e3";              // $foo это float (-1299)
$foo = 1 + "bob-1.3e3";           // $foo это integer (1)
$foo = 1 + "bob3";                // $foo это integer (1)
$foo = 1 + "10 Small Pigs";       // $foo это integer (11)
$foo = 4 + "10.2 Little Piggies"; // $foo это float (14.2)
$foo = "10.0 pigs " + 1;          // $foo это float (11)
$foo = "10.0 pigs " + 1.0;        // $foo это float (11)

echo '<br />';
echo "\$foo==$foo; тип: " . gettype($foo) . "<br />\n";
