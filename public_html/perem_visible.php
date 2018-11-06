<?php
    $a = 5;
    $b = 7;
    function getSum()
    {
        global $a; // без global функция не увидит переменную $a
        global $b;
        $sum = $a + $b;
        $a++;
        return $sum;
    }

    $res = getSum();
    echo $res;
    echo '<br />';
    echo $a; // a = 6
    echo '<br />';

    // Статические переменные (запоминается значение а и при повторном вызове функции а добавляется)
    function funcStat()
    {
        static $a;
        $a++;
        return $a;
    }
    echo funcStat().'<br />'; // a = 1
    echo funcStat().'<br />'; // a = 2


    echo '<br />';
    echo '<br />';
    	//217
	$a = 10;
	$b = 1;

	// Вариант 1
	function sum()
	{
		global $a;
		global $b;
		echo "$a + $b = ".($a + $b);
	}
	sum();

	// Вариант 2
	function plus($a, $b)
	{
		echo '<br />';
        echo "$a + $b = ".($a + $b);
        $a++; // a не изменится т.к. не глобальная
	}
    plus($a, $b);
    echo '<br />'.$a; // a = 10

	// Вариант 3
	function GetSumma($a, $b)
	{
		$su = $a + $b;
		return $su;
	}
	$sum = GetSumma($a, $b);
	echo '<br />';
	echo "$a + $b = ".$sum;