<!--
    
// Видео 3_06. Тема: "Парсинг INI-файлов".
// Домашнее задание.

Создайте INI-файл, где укажите цвет текста и его размер.
Создайте простую HTML-страницу (обязательно с DOCTYPE и
всеми базовыми HTML-тегами: html, head, body).
Добавьте пару абзацев с помощью тега <p>.
Получите данные из INI-файла и подставьте их внутри тега <style>,
чтобы у текста внутри тега <p> был соответствующий цвет и размер.
-->


<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <style>
        p {
            <?php $array = parse_ini_file("306.config.ini");

            foreach ($array as $key => $value) {
                echo ("$key" . ": " . "$value" . ";");
            }

            ?>
        }
    </style>
</head>

<body>
    <p><?php fopen() ?>Здравствуй, мир!</p>
</body>

</html>