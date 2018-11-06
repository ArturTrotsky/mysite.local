<!-- Создает форму для ввода чисел Х и Y.
Если форма еще не отправлена - Х = false и Y = false,
Если введено не число - Х = false и Y = false,
Если введено число - X = число и Y = число -->

<?php
if (isset($_POST['form_2'])) {
    $x = $_POST['x']; // эквивалентно $x = $_POST['x'] ?? false;
    $y = $_POST['y']; // эквивалентно $y = $_POST['y'] ?? false;
} else {
    $x = false;       // эквивалентно $x = $_POST['x'] ?? false;
    $y = false;       // эквивалентно $y = $_POST['y'] ?? false;
}
?>

<form name="form_2" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
        Enter the "X" number: <input type="text" name="x" value="<?= $x ?>" /><br>
        Enter the "Y" number: <input type="text" name="y" value="<?= $y ?>" /><br>
        <input type="submit" name="form_2" value="Send" />
    </div>
</form>

<?php
if (isset($_POST['form_2']) && (is_numeric($x) == false || is_numeric($y) == false)) {
    $x = false;
    $y = false;
    echo 'Enter only a number, for example, X: ' . round((rand() / rand()), 2) . '<br />';
    echo 'Enter only a number, for example, Y: ' . (round(rand(), 2)) . '<br /><br />';
}
?>