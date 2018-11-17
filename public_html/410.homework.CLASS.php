<?php

// Видео 4_10. Тема: "Интерфейсы".
// Домашнее задание.


// Создайте интерфейс СanMove с методом move().
interface CanMove
{
    public function move();
}

// Создайте интерфейс СanFly с методом fly().
interface CanFly
{
    public function fly();
}

/* Создайте класс Car с реализацией интерфейса CanMove, где в методе move()
будет выводиться строка «Движение автомобиля». */
class Car implements CanMove
{
    public function move()
    {
        echo 'Движение автомобиля';
    }
}

/* Создайте класс Aircraft с реализацией интерфейса CanFly, где в методе fly()
будет выводиться строка «Полёт самолёта». */
class Aircraft implements CanFly
{
    public function fly()
    {
        echo 'Полет самолета';
    }
}

// Создайте объект класса Car и вызовите метод move().
$car = new Car();
$car->move();

// Создайте объект класса Aircraft и вызовите метод fly().
$air_craft = new Aircraft();
$air_craft->fly();