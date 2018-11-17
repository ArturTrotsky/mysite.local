<?php

// Видео 4_04. Тема: "Конструктор, деструктор и методы".
// Домашнее задание.

/*
Добавьте в класс, созданный в предыдущем упражнении, конструктор, принимающий x и y.
Внутри конструктора присвойте полям значения, полученные в параметрах конструктора.
Напишите GET и SET методы.
Проверьте правильность их работы.
Примечание: Вы должны самостоятельно понять, как убедиться, что всё работает верно:
какие методы надо выполнить и какие выводы в браузер сделать.
 */

class Point
{
    public $x = 5;
    public $y = 7;

    public function __construct($x = false, $y = false)
    {
        if ($x) {
            $this->x = $x;
        }

        if ($y) {
            $this->y = $y;
        }

    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}

$point_1 = new Point();
var_dump($point_1);

$point_1->setX(45);
var_dump($point_1->x);

var_dump($point_1->getX());
var_dump($point_1->getY());
var_dump($point_1);
