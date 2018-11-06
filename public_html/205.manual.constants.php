<?php

define("CONSTANT", "Здравствуй, мир.");
echo CONSTANT; // выводит "Здравствуй, мир."

echo '<br />';
echo Constant; // выводит "Constant" и предупреждение.

// Работает, начиная с версии PHP 5.3.0
echo '<br />';
const CONSTANT = 'World';
echo CONSTANT;

// Работает, начиная с версии PHP 5.6.0
const ANOTHER_CONST = CONSTANT . '; Прощай, мир.';
echo '<br />';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo '<br />';
echo ANIMALS[1]; // выводит "cat"

// Работает в PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo '<br />';
echo ANIMALS[1]; // выводит "cat"
