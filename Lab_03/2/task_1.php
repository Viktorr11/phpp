<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// Include file with functions and data (assuming selection.php contains createSelect function and $monthsList array)
include('selection.php');

// Default values for days, months, and years
$values = [
    'day1' => 1,
    'day2' => date('d'),
    'month1' => 1,
    'month2' => date('m'),
    'year1' => 2000,
    'year2' => date('Y')
];

// Update values from session or POST
$keys = array_keys($values);
foreach ($keys as $key) {
    if (isset($_SESSION[$key])) {
        $values[$key] = $_SESSION[$key];
    }
    if (isset($_POST[$key])) {
        $values[$key] = $_SESSION[$key] = $_POST[$key];
    }
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Construct date1 and date2 strings
    $date1 = "{$values['year1']}-{$values['month1']}-{$values['day1']}";
    $date2 = "{$values['year2']}-{$values['month2']}-{$values['day2']}";

    // Convert dates to timestamps
    $time1 = strtotime($date1);
    $time2 = strtotime($date2);

    // Format dates for comparison
    $ISDATE1TRUE = date('Y-n-j', $time1);
    $ISDATE2TRUE = date('Y-n-j', $time2);
}
?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
    <?php if ($date1 != $ISDATE1TRUE) : ?>
        <div>Помилка в першій даті</div>
        <div> <?=$date1?></div>
        <div><?=$ISDATE1TRUE?></div>
    <?php else : ?>
        <div><?=$date1?> = TRUE</div>
    <?php endif; ?>
    <?php if ($date2 != $ISDATE2TRUE) : ?>
        <div>Помилка в другій даті</div>
        <div><?=$date2?></div>
        <div><?=$ISDATE2TRUE?></div>
    <?php else : ?>
        <div><?=$date2?>: коректно</div>
    <?php endif; ?>
<?php endif; ?>
<form method="post">
    <table>
        <tr>
            <td>Перша дата:</td>
            <td>
                <?= createSelect(1, 31, 'day1', null, $values['day1']) ?>
                <?= createSelect(1, 12, 'month1', $monthsList, $values['month1']) ?>
                <?= createSelect(1900, date('Y'), 'year1', null, $values['year1']) ?>
            </td>
        </tr>
        <tr>
            <td>Друга дата:</td>
            <td>
                <?= createSelect(1, 31, 'day2', null, $values['day2']) ?>
                <?= createSelect(1, 12, 'month2', $monthsList, $values['month2']) ?>
                <?= createSelect(1900, date('Y'), 'year2', null, $values['year2']) ?>
            </td>
        </tr>
        <tr>
            <td><button type="submit">ОК</button></td>
        </tr>
    </table>
</form>
</body>
</html>
