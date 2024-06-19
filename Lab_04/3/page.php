<?php
session_start();

if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    if($login == "Admin" && $password == 'password'){
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['isAuth'] = true;
        echo "Добрий день, Admin!";
    }
    else {
        if ($login != 'Admin') {
            echo "Невірно введений логін!<br>";
        }
        if ($password != 'password'){
            echo "Невірно введений пароль!<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a href="index.php">Вихід</a>
</body>
</html>
