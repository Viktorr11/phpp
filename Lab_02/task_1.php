<?php
$x = $y = null;
$result = [];

if (isset($_POST['sub'])) {
    if (is_numeric($_POST['x']) && is_numeric($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
    } else {
        echo "<p style='color: red;'>Введіть числові значення для x та y!</p>";
    }
}

function my_pow($a, $b) {
    $res = 1;
    for ($i = 0; $i < $b; $i++) {
        $res *= $a;
    }
    return $res;
}

function fact($a) {
    $res = 1;
    for ($i = 1; $i <= $a; $i++) {
        $res *= $i;
    }
    return $res;
}

function my_tg($a) {
    return sin($a) / cos($a);
}

function sum($a, $b) {
    return $a + $b;
}

function subtr($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    return $b != 0 ? $a / $b : 'NaN';
}

function average($a, $b) {
    return ($a + $b) / 2;
}

if ($x !== null && $y !== null) {
    $result = [
        'pow' => my_pow($x, $y),
        'fact' => fact($x),
        'my_tg' => my_tg($x),
        'sin' => sin($x),
        'cos' => cos($x),
        'tan' => tan($x),
        'sum' => sum($x, $y),
        'subtr' => subtr($x, $y),
        'mult' => mult($x, $y),
        'division' => division($x, $y),
        'average' => average($x, $y),
    ];
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
        table {
            margin-bottom: 15px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="x">x:</label>
        <input type="text" id="x" name="x" value="<?= htmlspecialchars($x) ?>">
        <label for="y">y:</label>
        <input type="text" id="y" name="y" value="<?= htmlspecialchars($y) ?>">
        <input type="submit" name="sub" value="Обчислити">
    </form>

    <?php if (!empty($result)) : ?>
        <table>
            <tr style="background-color: yellow; font-weight: bold;">
                <td>x<sup>y</sup></td>
                <td>x!</td>
                <td>my_tg(x)</td>
                <td>sin(x)</td>
                <td>cos(x)</td>
                <td>tg(x)</td>
                <td>x+y</td>
                <td>x-y</td>
                <td>x*y</td>
                <td>x/y</td>
                <td>average(x, y)</td>
            </tr>
            <tr>
                <td><?= $result['pow'] ?></td>
                <td><?= $result['fact'] ?></td>
                <td><?= $result['my_tg'] ?></td>
                <td><?= $result['sin'] ?></td>
                <td><?= $result['cos'] ?></td>
                <td><?= $result['tan'] ?></td>
                <td><?= $result['sum'] ?></td>
                <td><?= $result['subtr'] ?></td>
                <td><?= $result['mult'] ?></td>
                <td><?= $result['division'] ?></td>
                <td><?= $result['average'] ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
