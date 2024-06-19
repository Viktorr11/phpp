<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обчислення різниці між датами</title>
</head>
<body>
    <form method="post" action="">
        <label>Введіть першу дату:<br>
            <input type="text" name="date1">
        </label><br>
        <label>Введіть другу дату:<br>
            <input type="text" name="date2">
        </label><br>
        <input type="submit" value="Ok">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["date1"]) && isset($_POST["date2"])) {
        $date1 = strtotime($_POST["date1"]);
        $date2 = strtotime($_POST["date2"]);

        if ($date1 === false || $date2 === false) {
            echo '<p>Невірний формат дати. Введіть дату у форматі "YYYY-MM-DD".</p>';
        } else {
            $difference = abs($date2 - $date1);
            $days = floor($difference / (60 * 60 * 24));
            echo "<p>Кількість днів між датами: $days</p>";
        }
    }
    ?>
</body>
</html>
