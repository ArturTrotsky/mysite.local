<?php

// Простой массив (Начиная с PHP 5.4)
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

// Пример преобразования типов и перезаписи элементов
$array1 = [
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
];
var_dump($array1);

// Смешанные ключи типов integer и string
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
];
var_dump($array2);

// Индексированные массивы без ключа
$array3 = ["foo", "bar", "hallo", "world"];
var_dump($array3);

// Ключи для некоторых элементов
$array4 = [
    "a",
    "b",
    6 => "c",
    "d",
];
var_dump($array4);

// Доступ к элементам массива
$array5 = [
    'foo' => 'bar',
    42 => 24,
    'multi' => [
        'dimensional' => [
            'array' => 'foo'
        ]
    ]
];

var_dump($array5['foo']);
var_dump($array5[42]);
var_dump($array5['multi']['dimensional']['array']);

// Разыменование массива
function getArray() {
    return [1, 2, 3];
}

// в PHP 5.4
$secondElement = getArray()[1];
echo $secondElement;

// ранее делали так
$tmp = getArray();
$secondElement = $tmp[1];

// или так
list(, $secondElement) = getArray();

// Если вы хотите удалить пару ключ/значение, вам необходимо использовать функцию unset().
$arr6 = [
    5 => 1,
    12 => 2
];

$arr6[] = 56;    // В этом месте скрипта это
                // то же самое, что и $arr[13] = 56;

$arr6["x"] = 42; // Это добавляет к массиву новый
                // элемент с ключом "x"
                
unset($arr6[5]); // Это удаляет элемент из массива

unset($arr6);    // Это удаляет массив полностью


// если ключ не был указан, то будет взят максимальный из существующих целочисленных (integer) индексов
// Создаем простой массив.
$array7 = [1, 2, 3, 4, 5];
print_r($array7);

// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
foreach ($array7 as $i => $value) {
    unset($array7[$i]);
}
print_r($array7);

// Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
$array7[] = 6;
print_r($array7);

// Переиндексация:
$array7 = array_values($array7);
$array7[] = 7;
print_r($array7);



// Функция unset() позволяет удалять ключи массива
$a = array(1 => 'один', 2 => 'два', 3 => 'три');
unset($a[2]);
/* даст массив, представленный так:
   $a = array(1 => 'один', 3 => 'три');
   а НЕ так:
   $a = array(1 => 'один', 2 => 'три');
*/

$b = array_values($a); //переиндексировать массив
// Теперь $b это array(0 => 'один', 1 => 'три')


// Коллекция
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
    echo "Вам нравится $color?\n";
}

foreach ($colors as &$color) {
    $color = strtoupper($color); // Переводит в верхний регистр
}
unset($color); /* это нужно для того, чтобы последующие записи в
$color не меняли последний элемент массива */

print_r($colors);

// Индекс, начинающийся с единицы
$firstquarter  = array(1 => 'Январь', 'Февраль', 'Март');
print_r($firstquarter);


/* При присваивании массива всегда происходит копирование значения.
Чтобы скопировать массив по ссылке, вам нужно использовать оператор ссылки */
$arr1 = array(2, 3);
var_dump($arr1);
$arr2 = $arr1;
var_dump($arr2);
$arr2[] = 4; // $arr2 изменился,
             // $arr1 все еще array(2, 3)
var_dump($arr2);            
$arr3 = &$arr1;
var_dump($arr3);
$arr3[] = 4; // теперь $arr1 и $arr3 одинаковы
var_dump($arr3);
var_dump($arr1);
