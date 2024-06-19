<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Random Squares</title>
    <style>
        body {
            background-color: black;
            margin: 0;
            overflow: hidden;
            position: relative;
            height: 100vh;
        }
        .square {
            border: 5px solid darkred;
            background-color: red;
            position: absolute;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        $size = mt_rand(50, 250);
        $left = mt_rand(0, 1300);
        $top = mt_rand(0, 500);
        echo "<div class='square' style='width: {$size}px; height: {$size}px; left: {$left}px; top: {$top}px;'></div>";
    }
    ?>
</body>
</html>
