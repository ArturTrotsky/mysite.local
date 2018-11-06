<?php
$foo = true; // присвоить $foo значение TRUE
?>

<?php
// == это оператор, который проверяет
// эквивалентность и возвращает boolean
if ($action == "show_version") {
    echo "Версия 1.23";
}

// это необязательно...
if ($show_separators == true) {
    echo "<hr>\n";
}

// ... потому что следующее имеет тот же самый смысл:
if ($show_separators) {
    echo "<hr>\n";
}
?>

<?php
var_dump((bool)"");        // bool(false)
var_dump((bool)1);         // bool(true)
var_dump((bool)-2);        // bool(true)
var_dump((bool)"foo");     // bool(true)
var_dump((bool)2.3e5);     // bool(true)
var_dump((bool)array(12)); // bool(true)
var_dump((bool)array());   // bool(false)
var_dump((bool)"false");   // bool(true)
