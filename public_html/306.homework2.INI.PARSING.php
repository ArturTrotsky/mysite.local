<?php

// Видео 3_06. Тема: "Парсинг INI-файлов".
// Домашнее задание.

/*
Создайте 2 языковых файла ru.ini и en.ini, где будут языковые
константы и их перевод. Например, TITLE=Заголовок – в ru.ini,
и TITLE=Title – в en.ini. Далее нужно проанализировать
массив $_SERVER и узнать, какой язык предпочтительнее у пользователя.
И вывести TITLE из того файла, который будет соответствовать языку пользователя.
При этом если задать GET-параметр: lang=ru или lang=en –
должно выводиться соответствующее представление языковой константы TITLE,
независимо от того, что находится в массиве $_SERVER.
*/
