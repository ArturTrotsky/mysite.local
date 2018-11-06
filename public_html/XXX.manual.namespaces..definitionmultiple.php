<?php
// Описание глобального и обычного пространства имен в одном файле
namespace MyProject {

    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }
    function connect()
    { /* ... */
    }
    $a = [1, 2, 5, 6, 7, 5];
    echo 'Число елементов в namespace массиве $a равно: ' . count($a);
    echo '<br />';
}

namespace {       // глобальный код
    $a = [1, 3, 5];
    echo 'Число елементов в глобальном массиве $a равно: ' . count($a);
}
?>