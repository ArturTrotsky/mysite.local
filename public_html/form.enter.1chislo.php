<!-- Создает форму для ввода числа x.
Если форма еще не отправлена - x = false,
Если введено не число - x = false,
Если введено число - x = число -->

<?php
if (isset($_POST['form_1'])) $x = $_POST['x']; // эквивалентно $x = $_POST['x'] ?? false;
else $x = false;                              //
?>

<!-- get лучше не использовать, т.к. значения из формы попадут в адресную строку -->
<form name="form_1" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
    <!-- Создание поля для ввода текста, value чтобы не стирались поля -->
        Enter the number: <input type="text" name="x" value="<?= $x ?>" />
        <input type="submit" name="form_1" value="Send" /> <!-- Создание кнопки -->
    </div>
</form>

<?php
if (isset($_POST['form_1']) && is_numeric($x) == false) {
    $x = false;
    echo 'Enter only a number, for example: ' . round((rand() / rand()), 2) . '<br /><br />';
}
?>