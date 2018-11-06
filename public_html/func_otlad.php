<?php
    /* Создайте трёхмерный ассоциативный массив.
    Выведите его с помощью print_r().
    Напишите функцию, которая будет выводить результат print_r(), но внутри тега <pre>.
    Воспользуйтесь этой функцией, передав ей массив из 1-го пункта.
    Поясните, что изменилось в выводе и почему. */
    
    $arr = [
        [
            'name' => 'Igor',
            'age' => 26,
            'sity' => [
                'born' => 'Kyiv',
                'live' => 'Odesa'
            ]
        ],
        [
            'name' => 'Nick',
            'age' => 30,
            'sity' => [
                'born' => 'Lviv',
                'live' => 'Kharkiv'
            ]
        ]
    ];
    print_r($arr);

    echo '<pre>';
    print_r($arr);
    echo '<pre>';

    echo '<br />';
    echo '<br />';
    echo '<br />';
    var_export($arr);

    echo '<br />';
    echo '<br />';
    echo '<br />';
    var_dump($arr);