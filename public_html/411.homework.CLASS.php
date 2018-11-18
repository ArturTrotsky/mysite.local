<?php

// Видео 4_11. Тема: "Трейты".
// Домашнее задание.

/* Перепишите предыдущее упражнение, только вместо интерфейсов должны быть трейты и
прямо в них должна быть реализация методов move() и fly().
В классах Car и Aircraft подключите трейты, удалив при этом реализацию методов move()
и fly() (поскольку теперь реализация находится в самих трейтах).
Создайте объект класса Car и вызовите метод move().
Создайте объект класса Aircraft и вызовите метод fly(). */

trait CanMove
{
    public function move()
    {
        echo 'Движение автомобиля';
    }
}

trait CanFly
{
    public function fly()
    {
        echo 'Полет самолета';
    }
}

class Car
{
    use CanMove, CanFly;

/*    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }
*/
}

class Aircraft
{
    use CanMove, CanFly;
}

$car = new Car(4);
//$car->setA(3);
//echo $car->getA();
$car->move();

$aircraft = new Aircraft();
$aircraft->fly();
