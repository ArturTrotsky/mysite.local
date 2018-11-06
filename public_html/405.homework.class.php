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

class Primer405
{
    private $name = 'Artur';
    private $soname = 'T';

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}

$method = new Primer405;

echo $method->getName() . PHP_EOL;

echo $method->setName('Arturchik') . PHP_EOL;