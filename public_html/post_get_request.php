<?php
    var_export($_GET);
    echo '- это массив $_GET - возвращает значение из адресной строки<br />';
    var_export($_POST);
    echo '- это массив $_POST - не возвращает значение из адресной строки и не показывает адрес, а показывает данные из формы<br />';
    var_export($_REQUEST);
    echo '- это массив $_REQUEST - это сумма двох выше<br />';
    echo '<br />';

    $summa = false;
    $x = false; // чтобы при первоначальном отображении страницы
                // в поле для ввода числа не отображались каракули
    $y = false;
    if (isset($_POST['myform'])) {
        $x = $_POST['x'] ?? false; // если $_POST["x"] существует то $x = $_POST["x"] иначе $x = false
        $y = $_POST['y'] ?? false; //
        if ($x !== false && $y !== false && is_numeric($x) && is_numeric($y)) $summa = $x + $y; // !== не эквивалентно
    }
?>

<?php if ($summa !== false) : ?> <p><b>Сумма равна: <?php echo $summa; ?> </b></p> <?php endif ?>


<!-- $_SERVER['PHP_SELF'] означает, что мы будем делать обработку в этом же самом файле -->
<form name="myform" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<!-- get лучше не использовать, т.к. значения из формы попадут в адресную строку -->
    <div>
        X: <input type="text" name="x" value="<?=$x?>" />     <!-- Создание поля для ввода текста,
                                            value чтобы не стирались поля -->
    </div>
    <div>
        Y: <input type="text" name="y" value="<?=$y?>" />     <!-- Создание поля для ввода текста -->
    </div>
    <div>
        <input type="submit" name="myform" value="Сумма"/> <!-- Создание кнопки -->
    </div>
</form>


<!-- Создайте форму с method=”post”.
В форме должны быть текстовая область (textarea) и кнопка.
В обработчике необходимо принять строку из текстовой области.
Создайте массив, где каждый элемент будет содержать 1 символ из переданной строки.
Удалите каждый чётный элемент (то есть 0, 2, 4 и так далее).
Соедините все элементы получившегося массива в одну строку и выведите её.
Примечание: Должно получиться что-то наподобие этого: пришла строка «Моя строка»,
а выйти в браузер должно: «о тоа». -->

<form name="myform2" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
        <p>Введите текст:</p>
        <p><textarea name="text"></textarea></p>
        <input type="submit" value="Отправить"/>
    </div>
</form>
<?php
   // $line = false;
    if (isset($_POST['myform2'])) { // проверяет была ли отправлена форма
        $line = $_POST['text'];
        echo '<br />';
        for($i = 0; $i < strlen($line); $i += 2) {
           echo $line[$i];
        }
    }
?>