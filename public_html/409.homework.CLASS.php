<?php

// Видео 4_09. Тема: "Механизм наследования и абстрактные классы".
// Домашнее задание.

//Создайте абстрактный класс Shape с абстрактным методом draw().
abstract class Shape
{
    abstract public function draw();
}

/*Сделайте класс Point со свойствами x и y (оба public) наследующим класс Shape.
Реализуйте метод draw() в классе Point, выведя в нём строку: «Рисуем точку с координатами (x, y)».
Разумеется, вместо x и y должны быть конкретные значения.*/
class Point extends Shape
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function draw()
    {
        echo 'Рисуем точку с координатами: ' . $this->x . ', ' . $this->y;
    }
}

// Попробуйте создать объект класса Point. Проанализируйте получившуюся ошибку.
// $point = new Point();

// Вызовите метод draw() у объекта класса Point и убедитесь, что всё работает правильно.
$point = new Point(1, 2);
$point->draw();
