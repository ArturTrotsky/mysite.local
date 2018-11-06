<!-- Создает форму для ввода числа x.
Если форма еще не отправлена - x = false,
Если введено не число - x = false,
Если введено число - x = число -->

<?php
//if (isset($_POST['form'])) $x = $_POST['x']; // эквивалентно $x = $_POST['x'] ?? false;
//else $x = false;                              //
?>

<!-- get лучше не использовать, т.к. значения из формы попадут в адресную строку -->
<form name="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
    <!-- Создание поля для ввода текста, value чтобы не стирались поля -->
        Введите текст: <input type="text" name="x" value="<?= $x ?>" />
        <input type="submit" name="save" value="Сохранить" /> <!-- Создание кнопки -->
        <input type="submit" name="inter" value="Загрузить" /> <!-- Создание кнопки -->
        <input type="submit" name="delete" value="Удалить" /> <!-- Создание кнопки -->
    </div>
</form>
