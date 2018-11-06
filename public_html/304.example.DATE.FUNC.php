<?php

// Видео 3_04. Тема: "Функции для работы с датой и временем".
// Пример с урока

$start = microtime(true);
echo $start . '<br />';

$time = time();
echo $time . '<br />';

echo 'Текущее время: ' . date('d.m.Y H:i:s');

$time = mktime(2, 0, 30, 5, 10, 2017);

echo '<br />Получившееся дата и время: ' . date('d.m.Y H:i:s', $time) . '<br />';

$time = strtotime('12.05.2016');
echo $time . '<br />';
echo date("Y.m.d", $time);

$d = 29;
$m = 2;
$y = 2016;
echo '<br />';
if (checkdate($m, $d, $y)) echo 'Дата корректна';
else echo 'Дата не корректна';

function getGM($local)
{
    $offset = date("Z", $local); // Смещение временной зоны в секундах
    return $local - $offset; // $local = time() = количество секунд, прошедших с начала эпохи Unix (1 января 1970 00:00:00 GMT)
}
function getLM($gm, $offset)
{
    return $gm + $offset;
}

echo '<br />';

echo date('Y.m.d H:i:s', getGM(time()));
echo '<br />';
echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 2));

echo '<br />Время работы скрипта: ' . (microtime(true) - $start);
