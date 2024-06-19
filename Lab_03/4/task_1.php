<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!is_dir($login)) {
        if (mkdir($login)) {
            // Create video directory and files
            mkdir("{$login}\\video");
            for ($i = 1; $i <= 4; $i++) {
                $video = fopen("{$login}\\video\\{$i}.txt", 'w');
                fclose($video);
            }

            // Create music directory and files
            mkdir("{$login}\\music");
            for ($i = 1; $i <= 4; $i++) {
                $music = fopen("{$login}\\music\\{$i}.txt", 'w');
                fclose($music);
            }

            // Create photo directory and files
            mkdir("{$login}\\photo");
            for ($i = 1; $i <= 4; $i++) {
                $photo = fopen("{$login}\\photo\\{$i}.txt", 'w');
                fclose($photo);
            }

            echo "Створено папку з ім'ям \"$login\" та підпапки з файлами.";
        } else {
            echo "Помилка! Не вдалося створити папку \"$login\".";
        }
    } else {
        echo "Помилка! Папка з ім'ям \"$login\" вже існує!";
    }
}
?>
