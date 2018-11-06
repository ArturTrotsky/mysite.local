<?php

switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
}


// Оператор switch допускает сравнение с типом string
switch ($i) {
    case "яблоко":
        echo "i это яблоко";
        break;
    case "шоколадка":
        echo "i это шоколадка";
        break;
    case "пирог":
        echo "i это пирог";
        break;
}


switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i меньше чем 3, но неотрицательный";
        break;
    case 3:
        echo "i равно 3";
}


// Самый правильный вариант, т.к. в нем используется default
switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
        echo "i не равно 0, 1 или 2";
}


// Альтернативный синтаксис
switch ($i) :
    case 0:
    echo "i равно 0";
    break;
case 1:
    echo "i равно 1";
    break;
case 2:
    echo "i равно 2";
    break;
default:
    echo "i не равно to 0, 1 или 2";
endswitch;


// Альтернативный синтаксис
switch ($beer) {
    case 'tuborg';
case 'carlsberg';
case 'heineken';
echo 'Хороший выбор';
break;
default;
echo 'Пожалуйста, сделайте новый выбор...';
break;
}
