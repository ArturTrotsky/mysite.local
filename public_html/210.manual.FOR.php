<?php

// Рассмотрим следующие примеры. Все они отображают числа от 1 до 10:
/* пример 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* пример 2 */

for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* пример 3 */

$i = 1;
for (;; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* пример 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);


// PHP также поддерживает альтернативный синтаксис с двоеточием для циклов for.
// Перебор массивов как показано ниже - это обычное дело для многих пользователей.
/*
 * Это массив с некоторыми данными, которые мы хотим изменить
 * при работе цикла.
 */
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for ($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}

/*Поскольку размер не меняется, цикл может быть легко оптимизирован
с помощью промежуточной переменной, в которую будет записан размер массива,
вместо повторяющихся вызовов функции count():*/
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for ($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}