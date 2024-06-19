<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Отримання назви файлу</title>
</head>
<body>
    <form method="post" action="">
        <label for="path">Введіть повний шлях до файлу: </label><br>
        <input type="text" name="path" id="path"><br>
        <small>Наприклад: D:\WebServers\home\testsite\www\myfile.txt</small><br>
        <input type="submit" value="Ok">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["path"])) {
        $path = trim($_POST["path"]);
        if (!empty($path)) {
            $arr = explode('\\', $path);
            $fileName = end($arr);
            $arrName = explode('.', $fileName);
            echo '<p>Назва файлу без розширення: ' . $arrName[0] . '</p>';
        } else {
            echo '<p>Будь ласка, введіть шлях до файлу.</p>';
        }
    }
    ?>
</body>
</html>
