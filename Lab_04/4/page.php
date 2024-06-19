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
    $_SESSION['games'] = [];
}
if (!isset($_SESSION['aboutMe'])) {
    $_SESSION['aboutMe'] = '';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $password = ($_POST['password'] == $_POST['rePassword']) ? htmlspecialchars($_POST['password']) : 'Не співпадає!';
    $sex = htmlspecialchars($_POST['sex']);
    $city = htmlspecialchars($_POST['cities']);
    $games = isset($_POST['game']) ? $_POST['game'] : [];
    $aboutMe = htmlspecialchars($_POST['aboutMe']);

    // Store form data in session variables
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['rePassword'] = htmlspecialchars($_POST['rePassword']); // Ensure to store both passwords securely
    $_SESSION['sex'] = $sex;
    $_SESSION['city'] = $city;
    $_SESSION['games'] = $games;
    $_SESSION['aboutMe'] = $aboutMe;

    // Handle photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $photoPath = $_FILES['photo']['tmp_name'];
        $newPath = 'uploads/' . $_FILES['photo']['name']; // Adjust the path as needed
        move_uploaded_file($photoPath, $newPath);
        $_SESSION['photoPath'] = $newPath; // Store the path in session for display
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .one {
            text-align: right;
            opacity: 50%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="one">Логін:</td>
            <td class="two"><?=$_SESSION['login']?></td>
        </tr>
        <tr>
            <td class="one">Пароль:</td>
            <td class="two"><?=$_SESSION['password']?></td>
        </tr>
        <tr>
            <td class="one">Стать:</td>
            <td class="two"><?=$_SESSION['sex']?></td>
        </tr>
        <tr>
            <td class="one">Місто:</td>
            <td class="two"><?=$_SESSION['city']?></td>
        </tr>
        <tr>
            <td class="one">Улюбленні ігри:</td>
            <td class="two">
                <?php foreach ($_SESSION['games'] as $game): ?>
                    <?=htmlspecialchars($game)?> 
                <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <td class="one">Про себе:</td>
            <td class="two"><?=nl2br($_SESSION['aboutMe'])?></td>
        </tr>
        <tr>
            <td class="one">Фотографія:</td>
            <td class="two">
                <?php if (isset($_SESSION['photoPath'])): ?>
                    <img style="width: 100px; height: 100px;" src="<?=$_SESSION['photoPath']?>" alt="Uploaded photo">
                <?php endif; ?>
            </td>
        </tr>
    </table>
    <a href="index.php">Повернутися на головну сторінку</a>
</body>
</html>
 