<?php // функция для упражнения require_include #2_24
    function no_1()
    {
        if(isset($_POST['text'])) {
        $line = $_POST['text'];
            echo '<br />Выведем нечетные символы из строки что выше: ';
            for ($i = 1; $i < strlen($line); $i += 2) 
            echo $line[$i];
        }
    }

    function no_2($x, $y)
    {
        $summa = false;
        $x = false; // чтобы при первоначальном отображении страницы
                    // в поле для ввода числа не отображались каракули
       $y = false;
        if (isset($_POST['myform'])) {
            $x = $_POST['x'] ?? false; // если $_POST["x"] существует то $x = $_POST["x"] иначе $x = false
            $y = $_POST['y'] ?? false; //
            if ($x !== false && $y !== false && is_numeric($x) && is_numeric($y)) // !== не эквивалентно
            return $x + $y;
            return false; 
        }
    }
?>

