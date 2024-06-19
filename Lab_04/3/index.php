<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieving login and password from the form
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // You can validate login and password here against your database or other storage
    // For simplicity, let's check if login and password are not empty
    if (!empty($login) && !empty($password)) {
        // Simulate authentication
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['isAuth'] = true;
        
        // Redirect to a protected page or dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Помилка! Введіть логін і пароль.";
    }
}
?>
