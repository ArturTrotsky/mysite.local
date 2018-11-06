<?php

// addslashes — Экранирует строку с помощью слешей
$str = "Ваше имя O'Reilly?";
// выводит: Ваше имя O\'Reilly?
echo addslashes($str);


// explode — Разбивает строку с помощью разделителя
// Пример 1
$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // кусок1
echo $pieces[1]; // кусок2

// Пример 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *


/* 
   Строка, которая не содержит разделителя, будет
   просто возвращать массив с одним значением оригинальной строки.
*/
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );
var_dump( explode( ',', $input3 ) );


$str = 'один|два|три|четыре';

// положительный лимит
print_r(explode('|', $str, 2));

// отрицательный лимит (начиная с PHP 5.1)
print_r(explode('|', $str, -1));


// sprintf — Возвращает отформатированную строку
// МНОГО ПРИМЕРОВ

// implode — Объединяет элементы массива в строку
$array = array('имя', 'почта', 'телефон');
$comma_separated = implode(",", $array);
echo $comma_separated; // имя,почта,телефон
// Пустая строка при использовании пустого массива:
var_dump(implode('hello', array())); // string(0) "


// ltrim — Удаляет пробелы (или другие символы) из начала строки
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";


$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// удаляем управляющие ASCII-символы с начала $binary
// (от 0 до 31 включительно)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);