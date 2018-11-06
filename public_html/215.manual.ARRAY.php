<?php

// Операторы, работающие с массивами

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Объединение $a и $b
echo "Объединение \$a и \$b: \n";
var_dump($c);

$c = $b + $a; // Объединение $b и $a
echo "Объединение \$b и \$a: \n";
var_dump($c);

$a += $b; // Объединение $a += $b, это $a и $b
echo "Объединение \$a += \$b: \n";
var_dump($a);



// Сравнение массивов

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
