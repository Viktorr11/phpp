<?php
session_start();

// Initialize session variables if they are not set
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = '';
}
if (!isset($_SESSION['password'])) {
    $_SESSION['password'] = '';
}
if (!isset($_SESSION['rePassword'])) {
    $_SESSION['rePassword'] = '';
}
if (!isset($_SESSION['sex'])) {
    $_SESSION['sex'] = '';
}
if (!isset($_SESSION['city'])) {
    $_SESSION['city'] = '';
}
if (!isset($_SESSION['games'])) {
    $_SESSION['games'] = '';
}
if (!isset($_SESSION['aboutMe'])) {
    $_SESSION['aboutMe'] = '';
}

// Language selection handling
if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang);
    header("Location: http://backendlab04/4/index.php");
    exit; // Ensure no further code execution after redirect
}

// Display language name based on cookie value
if(isset($_COOKIE['lang'])) {
    $langName = $_COOKIE['lang'];
    switch ($langName) {
        case 'ukr':
            $curLang = "Українська";
            break;
        case 'pol':
            $curLang = "Польська";
            break;
        case 'eng':
            $curLang = "Англійська";
            break;
        case 'ger':
            $curLang = "Німецька";
            break;
        case 'fra':
            $curLang = "Французька";
            break;
        default:
            $curLang = "Українська"; // Default language
            break;
    }
} else {
    $curLang = "Українська"; // Default language
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        textarea, select, input {
            margin-bottom: 10px;
        }
        .langs {
            padding: 8px;
            width: 241px;
            margin-bottom: 10px;
            background-color: #2958ef;
        }
        img {
            width: 40px;
            height: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<div class="langs">
    <a href="index.php?lang=ukr">  <img src="ua.png"></a>
    <a href="index.php?lang=pol">  <img src="pl.png"></a>
    <a href="index.php?lang=eng">  <img src="en.png"></a>
    <a href="index.php?lang=ger">  <img src="gr.png"></a>
    <a href="index.php?lang=fra"> <img src="fr.png"></a>
</div>
<p>Вибрана мова: <?=$curLang?></p>
<form action="page.php" method="post" enctype="multipart/form-data">
    <label>Логін:
        <input type="text" name="login" value="<?=htmlspecialchars($_SESSION['login'])?>">
    </label><br>
    <label>Пароль:
        <input type="password" name="password" value="<?=htmlspecialchars($_SESSION['password'])?>">
    </label><br>
    <label>Пароль (ще раз):
        <input type="password" name="rePassword" value="<?=htmlspecialchars($_SESSION['rePassword'])?>">
    </label><br>
    <label>Стать:
        <input type="radio" name="sex" value="чоловік" <?=($_SESSION['sex'] === "чоловік" ? 'checked' : '')?>> чоловік
        <input type="radio" name="sex" value="жінка" <?=($_SESSION['sex'] === "жінка" ? 'checked' : '')?>> жінка
    </label><br>
    <label>Місто:
        <select name="cities">
            <option value="Житомир" <?=($_SESSION['city'] === 'Житомир') ? 'selected' : ''?>>Житомир</option>
            <option value="Київ" <?=($_SESSION['city'] === 'Київ') ? 'selected' : ''?>>Київ</option>
            <option value="Вінниця" <?=($_SESSION['city'] === 'Вінниця') ? 'selected' : ''?>>Вінниця</option>
            <option value="Тернопіль" <?=($_SESSION['city'] === 'Тернопіль') ? 'selected' : ''?>>Тернопіль</option>
            <option value="Львів" <?=($_SESSION['city'] === 'Львів') ? 'selected' : ''?>>Львів</option>
            <option value="Одеса" <?=($_SESSION['city'] === 'Одеса') ? 'selected' : ''?>>Одеса</option>
            <option value="Рівне" <?=($_SESSION['city'] === 'Рівне') ? 'selected' : ''?>>Рівне</option>
        </select>
    </label><br>
    <label>Улюблені ігри:<br>
        <input type="checkbox" name="games[]" value="football" <?=in_array('football', explode(',', $_SESSION['games'])) ? 'checked' : ''?>> футбол<br>
        <input type="checkbox" name="games[]" value="basketball" <?=in_array('basketball', explode(',', $_SESSION['games'])) ? 'checked' : ''?>> баскетбол<br>
        <input type="checkbox" name="games[]" value="volleyball" <?=in_array('volleyball', explode(',', $_SESSION['games'])) ? 'checked' : ''?>> волейбол<br>
        <input type="checkbox" name="games[]" value="chess" <?=in_array('chess', explode(',', $_SESSION['games'])) ? 'checked' : ''?>> шахи<br>
        <input type="checkbox" name="games[]" value="worldoftanks" <?=in_array('worldoftanks', explode(',', $_SESSION['games'])) ? 'checked' : ''?>> World of Tanks<br>
    </label><br>
    <label>Про себе:<br>
        <textarea name="aboutMe"><?=htmlspecialchars($_SESSION['aboutMe'])?></textarea>
    </label><br>
    <label>Фотографія:
        <input type="file" name="photo">
    </label><br>
    <input type="submit" value="Зареєструватися">
</form>
</body>
</html>
