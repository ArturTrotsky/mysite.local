<?php

// Выражения

$first ? $second : $third;

function double($i)
{
    return $i * 2;
}
$b = $a = 5;        /* присвоить значение пять переменным $a и $b */
$c = $a++;          /* постфиксный инкремент, присвоить значение $a 
                       (5) переменной $c */
$e = $d = ++$b;     /* префиксный инкремент, присвоить увеличенное
                       значение $b (6) переменным $d и $e */

/* в этой точке и $d, и $e равны 6 */

$f = double($d++);  /* присвоить удвоенное значение $d перед
                       инкрементом (2*6 = 12) переменной $f */
$g = double(++$e);  /* присвоить удвоенное значение $e после
                       инкремента (2*7 = 14) переменной $g */
$h = $g += 10;      /* сначала переменная $g увеличивается на 10,
                       приобретая, в итоге, значение 24. Затем значение
                       присвоения (24) присваивается переменной $h,
                       которая в итоге также становится равной 24. */
                       