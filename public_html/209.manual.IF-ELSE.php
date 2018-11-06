<?php

$a = 3;
$b = 5;

// else
if ($a > $b) {
    echo "a больше, чем b";
} else {
    echo "a НЕ больше, чем b";
}


// elseif/else if 
if ($a > $b) {
    echo "a больше, чем b";
} elseif ($a == $b) {
    echo "a равен b";
} else {
    echo "a меньше, чем b";
}
?>

<!-- Альтернативный синтаксис управляющих структур --> 
<?php if ($a == 5): ?>
A равно 5
<?php endif; ?>

<?php
if ($a == 5):
    echo "a равно 5";
    echo "...";
elseif ($a == 6):
    echo "a равно 6";
    echo "!!!";
else:
    echo "a не равно ни 5 ни 6";
endif;
?>
