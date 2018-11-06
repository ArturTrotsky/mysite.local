<?php
    $count = 1000000;
    $summa = 0;
    for ($i = 0; $i <= $count; $i++)
    $summa += $i;
    echo 'summa : '.$summa.'<br />';
    // Сколько занимает места в оперативной памяти переменная summa
    echo 'Место в памяти (исп. переменная)'.memory_get_usage($summa); 
    unset($summa); 

    echo '<br />';
    for ($i = 0; $i <= $count; $i++)
    $arr[] = $i;
    $summa = 0;
    foreach ($arr as $v)
    $summa += $v;
    echo 'summa : '.$summa.'<br />';
    // Сколько занимает места в оперативной памяти переменная summa
    // при использовании массива
    echo 'Место в памяти (исп. массив)'.memory_get_usage($summa); 
    unset($arr);
  
    echo '<br />';
    function memory($count)
    {
        for ($i = 0; $i <= $count; $i++)
        yield $i;
    }
    $summa = 0;
    foreach (memory($count) as $v)
    $summa +=$v;
    echo 'summa : '.$summa.'<br />';
    // Сколько занимает места в оперативной памяти переменная summa
    // при использовании генератора
    echo 'Место в памяти (исп. генератор)'.memory_get_usage($summa);

    /*Создайте анонимную функцию и поместите её в переменную.
    Функция должна принимать массив и возвращать среднее значение всех элементов. */
    $var = function($arr) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
        }
        $aver = $sum / count($arr);
        echo $aver;
        return $aver;
    };
    $arr = [1, 2, 3, 4, 5];
    echo '<br />';
    echo $var($arr);


    /* Пример из упражнения 220 */
    echo '<br />';
    $arr1 = ['Michael' => '27', 'Igor' => '20'];
    
    function gener($arr1, $call)
    {
        foreach ($arr1 as $k => $v)
        yield $k => $call($v);
    }

    $gen = gener($arr1, function($v)
    {
        if ($v > 23) return 'Worker';
        else return 'Student';
    });
    
    foreach ($gen as $key => $value) echo "$key - $value<br />";

    /* Создайте функцию-генератор, принимающую двумерный массив и функцию.
    Эта функция на каждой итерации должна возвращать среднее значение текущего массива.
    Создайте двумерный массив из чисел.
    С помощью foreach выведите все средние значения элементов двумерного массива. */
    $arr2 = [[1, 31], [30, 6]];
    function gener2($arr2, $func1)
    {
        foreach ($arr2 as $v)
        yield $func1($v);
    }

    $ave = gener2($arr2, function($v)
    {
        $sum = 0;
        for ($i = 0; $i < count($v); $i++) {
            $sum += $v[$i];
        }
        $aver = $sum / count($v);
        return $aver;
    });

    foreach ($ave as $p => $n) echo "$n<br />";

    // И зечем писать этот бред выше, если можно написать так как ниже
    foreach ($arr2 as $v) {
        $sum = 0;
        for ($i = 0; $i < count($v); $i++) {
            $sum += $v[$i];
        }
        $aver = $sum / count($v);
        echo '<br />'.$aver;
    }
