<?php
// Оригінальний текст
$text = "Abc bcb nbc aaa mmm pba";

// Підрядок для пошуку
$search = "bcb";

// Підрядок для заміни
$change = "Changed";

// Виконання заміни
$result = str_replace($search, $change, $text);

// Виведення результату
echo $result;
?>
