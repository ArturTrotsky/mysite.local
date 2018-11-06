<?php

// Меняет регистр всех ключей в массиве
$input_array = ["FirSt" => 1, "SecOnd" => 4];
print_r(array_change_key_case($input_array, CASE_UPPER)); // Либо CASE_UPPER, либо CASE_LOWER (используется по умолчанию)

// Разбивает массив на части
$input_array = ['a', 'b', 'c', 'd', 'e'];
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true)); //Eсли установлено в TRUE, ключи оригинального массива будут сохранены.

// Создает новый массив, используя один массив в качестве ключей, а другой для его значений
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);



// array_filter — Фильтрует элементы массива с помощью callback-функции
// Пример использования array_filter()
function odd($var)
{
    // является ли переданное число нечетным
    return ($var & 1);
}

function even($var)
{
    // является ли переданное число четным
    return (!($var & 1));
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Нечетные:\n";
print_r(array_filter($array1, "odd"));
echo "Четные:\n";
print_r(array_filter($array2, "even"));

$arr_sit = ['123' => 'ПСР', '1353' => 'КСП', '54123' => 'МІК-21', '714223' => 'МІК-21', '551253' => 'ІТМ', '12366' => 'МІК', '12443' => 'ПЦ-12Р', '10203' => 'МІК-21', '13233' => 'ОБМ-100', '11231' => 'УВР', '91239' => 'ЙЦУ'];
function type($var)
{
    return ($var == 'МІК-21');
}
print_r(array_filter($arr_sit, "type"));
print_r($arr_sit);


// array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}


// array_keys — Возвращает все или некоторое подмножество ключей массива
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array(
    "color" => array("blue", "red", "green"),
    "size" => array("small", "medium", "large")
);
print_r(array_keys($array));


// array_flip — Меняет местами ключи с их значениями в массиве
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);

// array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}

// array_key_first — Получает первый ключ массива
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$firstKey = array_key_first($array);
var_dump(firstKey);

//  array_key_last — Получает последний ключ массива

// array_keys — Возвращает все или некоторое подмножество ключей массива
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array(
    "color" => array("blue", "red", "green"),
    "size" => array("small", "medium", "large")
);
print_r(array_keys($array));


// array_map — Применяет callback-функцию ко всем элементам указанных массивов

// Пример использования array_map()
function cube($n)
{
    return ($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);

// Использование array_map() вместе с лямбда-функцией
$func = function ($value) {
    return $value * 2;
};
print_r(array_map($func, range(1, 5)));


// Пример использования array_map(): обработка нескольких массивов
function show_Spanish($n, $m)
{
    return ("Число $n по-испански - $m");
}
function map_Spanish($n, $m)
{
    return (array($n => $m));
}
$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");
$c = array_map("show_Spanish", $a, $b);
print_r($c);
$d = array_map("map_Spanish", $a, $b);
print_r($d);


// Создание массива массивов
$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");
$d = array_map(null, $a, $b, $c);
print_r($d);


// Использование array_map() со строковыми ключами
$arr = array("stringkey" => "value");
function cb1($a)
{
    return array($a);
}
function cb2($a, $b)
{
    return array($a, $b);
}
var_dump(array_map("cb1", $arr));
var_dump(array_map("cb2", $arr, $arr));
var_dump(array_map(null, $arr));
var_dump(array_map(null, $arr, $arr));


// array_merge_recursive — Рекурсивное слияние одного или более массивов
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);


// array_merge — Сливает один или большее количество массивов
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


// Простой пример использования array_merge()
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);


/*
Если вы хотите дополнить первый массив элементами второго
без перезаписи элементов первого массива и без переиндексации,
используйте оператор объединения массивов +:
 */
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);


// array_merge() с не массивами
$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);


// array_pop — Извлекает последний элемент массива
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);


// array_product — Вычислить произведение значений массива
$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product(array()) . "\n";


// array_push — Добавляет один или несколько элементов в конец массива
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);


// array_reduce — Итеративно уменьшает массив к единственному значению, используя callback-функцию
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}
$a = array(1, 2, 3, 4, 5);
$x = array();
var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), потому что: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "Нет данных")); // string(19) "Нет данных"


// array_reverse — Возвращает массив с элементами в обратном порядке
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);
print_r($input);
print_r($reversed);
print_r($preserved);


// array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;


// array_shift — Извлекает первый элемент массива
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

// array_slice — Выбирает срез массива
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 2);      // возвращает "c", "d", и "e"
$output = array_slice($input, -2, 1);  // возвращает "d"
$output = array_slice($input, 0, 3);   // возвращает "a", "b", и "c"
// обратите внимание на различия в индексах массивов
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));


// array_sum — Вычисляет сумму значений массива
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";


// array_unique — Убирает повторяющиеся значения из массива
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);


// array_unshift — Добавляет один или несколько элементов в начало массива
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);


// array_values — Выбирает все значения массива
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));


// arsort — Сортирует массив в обратном порядке, сохраняя ключи
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// asort — Сортирует массив, сохраняя ключи
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// count — Подсчитывает количество элементов массива или что-то в объекте
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));
var_dump(count(null));
var_dump(count(false));


// in_array — Проверяет, присутствует ли в массиве значение
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}

$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' найдено со строгой проверкой\n";
}

if (in_array(1.13, $a, true)) {
    echo "1.13 найдено со строгой проверкой\n";
}


// key — Выбирает ключ из массива
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// этот цикл выведет все ключи ассоциативного массива,
// значения которых равны "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}


// krsort — Сортирует массив по ключам в обратном порядке
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// ksort — Сортирует массив по ключам
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// list — Присваивает переменным из списка значения подобно массиву
$info = array('кофе', 'коричневый', 'кофеин');

// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "$drink - $color, а $power делает его особенным.\n";

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "В $drink есть $power.\n";

// Или пропустить все, кроме третьей
list( , , $power) = $info;
echo "Мне нужен $power!\n";

// list() не работает со строками
list($bar) = "abcde";
var_dump($bar); // NULL


// Использование list() с индексами массивов
list($a, list($b, $c)) = array(1, array(2, 3));
var_dump($a, $b, $c);


// Использование list() с индексами массива
$info = array('кофе', 'коричневый', 'кофеин');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);


// natcasesort — Сортирует массив, используя алгоритм "natural order" без учета регистра символов
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
sort($array1);
echo "Обычная сортировка\n";
print_r($array1);
natcasesort($array2);
echo "\nNatural order сортировка (без учета регистра)\n";
print_r($array2);


// sort — Сортирует массив
// uasort — Сортирует массив, используя пользовательскую функцию для сравнения элементов с сохранением ключей
// uksort — Сортирует массив по ключам, используя пользовательскую функцию для сравнения ключей
// usort — Сортирует массив по значениям используя пользовательскую функцию для сравнения элементов