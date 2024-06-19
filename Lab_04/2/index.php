<?php
$style = "style='font-size: 24px;'"; // Default font size

if (isset($_COOKIE['fontSize'])) {
    $style = "style='font-size: {$_COOKIE['fontSize']}px;'";
}

if (isset($_GET['fontSize'])) {
    $fontSize = $_GET['fontSize'];
    setcookie('fontSize', $fontSize);
    $style = "style='font-size: {$fontSize}px;'";
    header("Location: http://BackEndLab04/2/index.php"); // Redirect to avoid resubmission
    exit; // Ensure no further output after header redirection
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <a <?php echo $style ?> href="index.php?fontSize=36">Великий шрифт</a><br>
    <a <?php echo $style ?> href="index.php?fontSize=24">Середній шрифт</a><br>
    <a <?php echo $style ?> href="index.php?fontSize=12">Маленький шрифт</a><br><br>
    <a <?php echo $style ?> href="page.php">Page</a>
</body>
</html>
