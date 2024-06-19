<!doctype html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <title>Lab_01</title>
        <style>
            body {
                background-color: black;
                position: relative;
                overflow: hidden;
                color: white;
                font-family: Arial, sans-serif;
            }
            .square {
                position: absolute;
                background-color: red;
            }
            .content {
                margin: 20px;
            }
            .content div {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
    <div class="content">
        <div>
            <?php
                // Завдання 2
                echo "Полину в мріях в купель океану,<br>";
                echo "Відчую шовковистість глибини,<br>";
                echo "Чарівні мушлі з дна собі дістану,<br>";
                echo "Щоб взимку<br>";
                echo "тішили<br>";
                echo "мене<br>";
                echo "вони…<br>";
            ?>
        </div>

        <div>
            <?php
                // Завдання 3
                $uah = 1500; // Задана сума в гривнях
                $usdRate = 29.41; // Приклад курсу гривні до долара
                $usd = round($uah / $usdRate, 2);

                echo "$uah грн. можна обміняти на $usd долар<br>";
            ?>
        </div>

        <div>
            <?php
                // Завдання 4
                $month = 5; // Заданий номер місяця

                if ($month == 12 || $month == 1 || $month == 2) {
                    echo "Це зима<br>";
                } elseif ($month >= 3 && $month <= 5) {
                    echo "Це весна<br>";
                } elseif ($month >= 6 && $month <= 8) {
                    echo "Це літо<br>";
                } elseif ($month >= 9 && $month <= 11) {
                    echo "Це осінь<br>";
                } else {
                    echo "Невірний номер місяця<br>";
                }
            ?>
        </div>

        <div>
            <?php
                // Завдання 5
                $char = 'a'; // Заданий символ

                switch ($char) {
                    case 'a':
                    case 'e':
                    case 'i':
                    case 'o':
                    case 'u':
                    case 'A':
                    case 'E':
                    case 'I':
                    case 'O':
                    case 'U':
                        echo "$char є голосною<br>";
                        break;
                    default:
                        echo "$char є приголосною<br>";
                        break;
                }
            ?>
        </div>

        <div>
            <?php
                // Завдання 6
                $number = mt_rand(100, 999); // Випадкове тризначне число
                $digits = str_split($number);

                $sum = array_sum($digits);
                $reverse = intval(strrev($number));
                sort($digits);
                $maxNumber = intval(implode('', array_reverse($digits)));

                echo "Випадкове число: $number<br>";
                echo "Сума його цифр: $sum<br>";
                echo "Число в зворотному порядку: $reverse<br>";
                echo "Найбільше можливе число з цифр: $maxNumber<br>";
            ?>
        </div>

        <div>
            <?php
                // Завдання 7.1
                function generateTable($rows, $cols) {
                    echo "<table border='1' cellspacing='0' cellpadding='5'>";
                    for ($i = 0; $i < $rows; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $cols; $j++) {
                            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                            echo "<td style='background-color: $color; width: 50px; height: 50px;'></td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }

                generateTable(5, 5); // Приклад виклику функції
            ?>
        </div>
    </div>

    <?php
        // Завдання 7.2
        function generateRandomSquares($n) {
            for ($i = 0; $i < $n; $i++) {
                $size = mt_rand(20, 100);
                $top = mt_rand(0, 500);
                $left = mt_rand(0, 500);
                echo "<div class='square' style='width: {$size}px; height: {$size}px; top: {$top}px; left: {$left}px;'></div>";
            }
        }

        generateRandomSquares(10); // Приклад виклику функції
    ?>
    </body>
</html>
