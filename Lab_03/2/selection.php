<?php
$monthsList = [
    1 => 'Січень',
    'Лютий',
    'Березень',
    'Квітень',
    'Травень',
    'Червень',
    'Липень',
    'Серпень',
    'Вересень',
    'Жовтень',
    'Листопад',
    'Грудень'
];

function createSelect($firstIndex, $lastIndex, $name, $titles = null, $value = null)
{
    $resultString = "<select name=\"{$name}\">";
    for ($i = $firstIndex; $i <= $lastIndex; $i++) {
        if ($titles === null) {
            $title = $i;
        } else {
            $title = $titles[$i];
        }
        if ($value == $i) {
            $selected = "selected";
        } else {
            $selected = "";
        }
        $resultString .= "<option {$selected} value='{$i}'>{$title}</option>";
    }
    $resultString .= "</select>";
    return $resultString;
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вибір місяця</title>
</head>
<body>
    <form method="post" action="">
        <?php
        // Приклад виклику функції для створення випадаючого списку місяців
        echo createSelect(1, 12, 'month', $monthsList, 3); // Вибраний за замовчуванням Березень
        ?>
        <input type="submit" value="Ok">
    </form>
</body>
</html>
