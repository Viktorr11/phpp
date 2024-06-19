<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сортування міст</title>
</head>
<body>
    <form method="post" action="">
        <label for="cities">Введіть назви міст через пробіл: </label><br>
        <input type="text" name="cities" id="cities"><br>
        <input type="submit" value="Ok">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["cities"])) {
            $str = trim($_POST["cities"]);
            if (!empty($str)) {
                $cities = explode(' ', $str);
                asort($cities);
                echo '<p>Відсортовані назви міст:</p>';
                echo '<p>' . implode(' ', $cities) . '</p>';
            } else {
                echo '<p>Будь ласка, введіть назви міст.</p>';
            }
        }
    ?>
</body>
</html>
