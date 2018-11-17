<?php

// Видео 4_07. Тема: "Магические" методы".
// Домашнее задание.

/*
Создайте 1 объект класса Point и сделайте его клон. Убедитесь, что клонирование прошло успешно,
попытавшись изменить свойство любого из объектов и выведя это свойство у обоих объектов.
Они должны быть различны. */

class Point
{
    private $x = 5;
    private $y = 7;

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

    // Добавьте в класс Point (из предыдущего упражнения) метод __toString() и реализуйте его,
    // вернув строку такого вида: «Точка с координатами (x, y)».
    // Безусловно, вместо x и y должны быть конкретные значения.
    // Создайте 3 разных объекта класса Point и выведите их через echo.
    public function __toString()
    {
        $s = '';
        $s .= "Точка с координатами ({$this->getX()}, {$this->getY()})";
        return $s;
    }

    // Реализуйте метод __get(), в котором при обращении к несуществующему свойству z будет
    // выведено сообщение «Класс Point работает только в двумерном пространстве».
    public function __get($name)
    {
        if (!isset($this->name)) {
            return 'Класс Point работает только в двумерном пространстве и не работает в ' . $name;
        }
    }

    // Аналогично сделайте метод __set() при попытке изменить свойствo z.
    public function __set($name, $value)
    {
        $this->name = $value;
    }

    // Так же реализуйте метод call(), в котором выведите ту же строку, что и в пункте 3,
    // при попытке вызвать метод setZ().
    public function __call($method, $args)
    {
        echo "$method не существует" . '<br />' . PHP_EOL;
        echo 'переданы параметры: ' . print_r($args, true);
    }
}

$point1 = new Point(1, 7);
$point2 = new Point(2, 3);
$point3 = new Point(6, 2);

echo $point1 . '<br />' . PHP_EOL;
echo $point2 . '<br />' . PHP_EOL;
echo $point3 . '<br />' . PHP_EOL;

echo $point1->z . '<br />' . PHP_EOL;

$point1->z = 5;
echo $point1->z;

$point1->setZ('jghff', 'kh', 'iug');
