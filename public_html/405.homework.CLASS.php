<?php

// Видео 4_05. Тема: "Модификаторы доступа".
// Домашнее задание.

/*
Сделайте в классе из предыдущего упражнения оба свойства – private.
Попытайтесь получить доступ к свойству напрямую. Изучите получившуюся ошибку.
Воспользуйтесь методами GET и SET, чтобы получить доступ к свойствам:
сначала установив значения свойств x и y (с помощью методов SET),
а после выведя получившиеся значения в браузер (с помощью методов GET).
 */

class My
{
    private $name = 1;

    public function __construct($name = false)
    {
        if ($name) {
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$my1 = new My(3);
var_dump($my1);

$my1->setName(100);
var_dump($my1);

var_dump($my1->getName());
