<?php

// Видео 3_05. Тема: "Функции для работы с файлами".
// Пример с урока

$handler = fopen('a.txt', 'a+');
$count = 1;
$str = '';
while (!feof($handler)) {
    $str .= fread($handler, $count);
}
echo $str;
    //echo fread($handler, 300000000);

fseek($handler, 0);
echo '<br />';
echo fread($handler, filesize('a.txt'));
    
    //fwrite($handler, "\nNew String");
fclose($handler);

echo '<br />';
$str = file_get_contents('a.txt');
echo $str . '<br />';

$str = file_put_contents('a.txt', file_get_contents('a.txt') . ' Hello World');

copy('a.txt', 'b.txt');

rename('b.txt', 'new.txt');

unlink('new.txt');

echo '<br />';
$handler = tmpfile();

fwrite($handler, 'abc');
fseek($handler, 0);
echo fread($handler, 3);
    //fclose($handler);
