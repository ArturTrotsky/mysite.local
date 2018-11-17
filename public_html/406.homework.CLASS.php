<?php

// Видео 4_06. Тема: "Статические свойства и методы".
// Домашнее задание.

/*
Добавьте в класс Point (из предыдущего упражнения) статическое свойство counter,
изначально равное 0.
Добавьте в конструктор инкремент этого статического свойства.
По сути, это будет счётчик объектов.
Добавьте статический метод, возвращающий свойство counter.
Создайте 3 объекта и выведите с помощью метода из 3-го пункта значение counter.
Убедитесь, что оно равно 3.
 */

class Point
{
    private static $counter = 0;
    private $firstName = null;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
        self::$counter++;
    }

    public function getCounter()
    {
        self::$counter++;
        return self::$counter;
    }
}

$point = new Point('Artur');
$point->getCounter();
$point->getCounter();
var_dump($point->getCounter());
var_dump($point);
