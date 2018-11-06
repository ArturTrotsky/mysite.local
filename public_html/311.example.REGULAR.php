<?php

// Видео 3_11. Тема: "Регулярные выражения. Часть 1".
// Пример с урока

$reg = '/a \dM/';
$str = 'a 8M';
echo preg_match($reg, $str, $matches);
echo '<br />';
print_r($matches);
$str = 'a M';
echo preg_match($reg, $str);

$reg = '#a \d b#';
$str = 'abca 8 b3333';
echo '<br />' . preg_match($reg, $str);

$reg = '#a \D b#';
$str = 'abca   b3333';
echo '<br />' . preg_match($reg, $str);

$reg = '#a \w b#';
$str = 'abca d b3333';
echo '<br />' . preg_match($reg, $str);

$reg = '#a \W b#';
$str = 'abca   b3333';
echo '<br />' . preg_match($reg, $str);

$reg = '#a \s b#';
$str = "abca \t b3333";
echo '<br />' . preg_match($reg, $str);

$reg = '#a \S b#';
$str = "abca d b3333";
echo '<br />' . preg_match($reg, $str);

$reg = '#a \n b#';
$str = "abca \n b3333";
echo '<br />' . preg_match($reg, $str);
