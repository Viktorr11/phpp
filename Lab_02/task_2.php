<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Colorful Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    function tbl($rows, $cols) {
        $table = '<table>';
        for ($i = 0; $i < $rows; $i++) {
            $table .= '<tr>';
            for ($j = 0; $j < $cols; $j++) {
                $r = mt_rand(0, 255);
                $g = mt_rand(0, 255);
                $b = mt_rand(0, 255);
                $color = "rgb($r, $g, $b)";
                $table .= "<td style='background-color: $color'></td>";
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        echo $table;
    }

    tbl(15, 10);
    ?>
</body>
</html>
