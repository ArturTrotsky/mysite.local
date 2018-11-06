<?php

// Видео 3_12. Тема: "Регулярные выражения. Часть 2".
// Пример с урока

$reg = '/a . b/';
$str = 'a . b';
echo preg_match($reg, $str) . '<br />';

$reg = '/^ab/';
$str = 'aba';
echo preg_match($reg, $str) . '<br />';

$reg = '/ab$/';
$str = 'abaaaab';
echo preg_match($reg, $str) . '<br />';

$reg = '/a [a-z][0-5] b$/';
$str = 'a c6 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a [^a-z] b$/';
$str = 'a 6 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a ([a-z]a\d) (b)$/';
$str = 'a aa5 b';
echo preg_match($reg, $str, $matches) . '<br />';
print_r($matches);
echo '<br />';

$reg = '/a ([a-z]a)* b$/';
$str = 'a  b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a ([a-z]a)+ b$/';
$str = 'a aa b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a a? b$/';
$str = 'a  b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a \d{3} b$/';
$str = 'a 539 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a \d{3,} b$/';
$str = 'a 5933 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a \d{3,5} b$/';
$str = 'a 59999 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a \d{3,5} b$/i';
$str = 'A 59999 b';
echo preg_match($reg, $str) . '<br />';

$reg = '/a\s\d{3,5} b$/ix';
$str = 'A 59999b';
echo preg_match($reg, $str) . '<br />';

$reg = '/ab$/m';
$str = "ab\nddd";
echo preg_match($reg, $str) . '<br />';

$reg = '/"(.*?)"/m';
$str = 'abc "23" abc "45"';
echo preg_match_all($reg, $str, $matches) . '<br />';
print_r($matches);
