<?php

// Пример вывода списка файлов сайта

echo 'Список файлов сайта ' . $_SERVER['HTTP_HOST'] . '<br />';

$dir = $_SERVER['DOCUMENT_ROOT'];

$files = scandir($dir);
foreach ($files as $key => $value) {
    echo '<a href="http://' . $_SERVER['HTTP_HOST'] . '/' . $value . '">' . $value . '</a> <br/>';
}
