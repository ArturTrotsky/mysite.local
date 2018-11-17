<?php

// Видео 4_08. Тема: "Сериализация объектов".
// Домашнее задание.

//При вводе x и y и нажатии кнопки «Сохранить» должен быть создан объект класса Point, который необходимо сериализовать.
//При нажатии кнопки «Загрузить» в поля x и y должны быть подставлены координаты сериализованного объекта.

class Point
{
    private $x;
    private $y;

    public function __construct($x = false, $y = false)
    {
        if ($x) {
            $this->x = $x;
        }
        if ($y) {
            $this->y = $y;
        }
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }
}

$form = file_get_contents('408.homework.CLASS.html');
echo $form . '<br />';

if (isset($_POST['Send'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];

    $point = new Point();
    $point->setX($x);
    echo $point->getX($x);
    echo 'Тут будет чтение с файла';
}
if (isset($_POST['Read'])) {
    echo 'Тут будет запись в файл';
}
