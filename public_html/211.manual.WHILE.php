<?php

/* пример 1 */
$i = 1;
while ($i <= 10) {
    echo $i++;  /* выводиться будет значение переменной
                   $i перед её увеличением
                   (post-increment) */
}


/* пример 2 */
$i = 1;
while ($i <= 10) :
    echo $i;
$i++;
endwhile;

/* пример 3 */
$i = 0;
do {
    echo $i;
} while ($i > 0);

/* пример 4 */
do {
    if ($i < 5) {
        echo "i еще недостаточно велико";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "значение i уже подходит";
    /* обработка i */

} while (0);

echo '<br />';
// generating an array with random even numbers between 1 and 1000

$numbers = array();
$array_size = 10;

// for loop runs as long as 2nd condition evaluates to true
for ($i = 0; $i < $array_size; $i++) { 

      // always executes (as long as the for-loop runs)
    do {
        $random = rand(1, 1000);

     // if the random number is even (condition below is false), the do-while-loop execution ends
     // if it's uneven (condition below is true), the loop continues by generating a new random number
    } while (($random % 2) == 1);

     // even random number is written to array and for-loop continues iteration until original condition is met
    $numbers[] = $random;
}

// sorting array by alphabet

asort($numbers);

// printing array

echo '<pre>';
print_r($numbers);
echo '</pre>';