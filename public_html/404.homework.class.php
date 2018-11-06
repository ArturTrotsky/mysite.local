<?php

namespace OOPStore;
// Видео 4_04. Тема: "Конструктор, деструктор и методы".
// Домашнее задание.

/*
Создайте класс Point (точка).
Добавьте в него 2 свойства: x и y (координаты).
Создайте объект класса Point.
Установите свойства x и y в значения 5 и 3 у объекта из 3-го пункта.
Выведите оба свойства объекта из 3-го пункта.
*/

class Point
{
    public $x;
    public $y;
}

$obj = new Point();
$obj->x = 5;
$obj->y = 3;

echo $obj->x . PHP_EOL;
echo $obj->y . PHP_EOL;

/*
Добавьте в класс, созданный в предыдущем упражнении, конструктор, принимающий x и y.
Внутри конструктора присвойте полям значения, полученные в параметрах конструктора.
Напишите GET и SET методы.
Проверьте правильность их работы.
Примечание: Вы должны самостоятельно понять, как убедиться, что всё работает верно:
какие методы надо выполнить и какие выводы в браузер сделать.
*/

class Tochka
{
    public $x;
    public $y;

    function __construct($a, $b)
    {
        $this->x = $a;
        $this->y = $b;
    }
}

$obj = new Tochka(10, 30);
echo $obj->x . PHP_EOL;
echo $obj->y . PHP_EOL;

//----------------------------------------------------------------

class My
{
    public $name = 'Igor';
    public $email;

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }
}

$obje = new My();

echo $obje->getName() . PHP_EOL;
echo $obje->getEmail() . PHP_EOL;

echo $obje->setName('Michael') . PHP_EOL;
echo $obje->setEmail('qwer@wqr.wqr') . PHP_EOL;
