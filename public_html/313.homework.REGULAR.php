<?php

// Видео 3_13. Тема: "Регулярные выражения. Часть 3".
// Домашнее задание.

// Напишите регулярное выражение для поисках ссылок в тексте.
// Сделайте замену всех ссылок в некоторой строке на «Ссылки запрещены».
// * Если ссылка совпадает с адресом Вашего сайта, то её не заменять.
// Примечание: Полная аналогия с уроком, только заменяются не e-mail, а именно ссылки.

$str = 'Ваш сайт https://myshows.me/ArturTrotsky/wasted , мой сайт http://my.me , его сайт http://myshows.me/ , заходи!';

define('MY_SITE', 'http://my.me');

$md5_site_pattern = "/" . md5(MY_SITE) . "/";

$patterns = [
    '/http:\/\/my.me/',
    '/http(.)?:\/\/\S+/',
    $md5_site_pattern
];

$replacements = [
    md5(MY_SITE),
    "\"Ссылки запрещены\"",
    MY_SITE
];

for ($i = 0; $i < 3; $i++) {
    $str = preg_replace($patterns[$i], $replacements[$i], $str);
}
echo $str;
