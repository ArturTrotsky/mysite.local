<?php

// Видео 4_12. Тема: "Пространство имён".
// Домашнее задание.

/* В предыдущем упражнении поместите класс Car, Aircraft, а также трейты CanMove и CanFly в отдельные файлы.
Добавьте пространство имён в каждый класс и каждый трейт.
В index.php подключите эти классы.
Создайте объект класса Car и вызовите метод move().
Создайте объект класса Aircraft и вызовите метод fly().
Примечание: Для использования классов Вы можете использовать как use, так и писать полный путь.
Также можно комбинировать эти способы. */

use myClasses\Aircraft;
use myClasses\Car;

require_once '412.traitCanFly.php';
require_once '412.traitCanMove.php';
require_once '412.classAircraft.php';
require_once '412.classCar.php';

$car = new Car(4);
$car->move();

$aircraft = new Aircraft();
$aircraft->fly();
