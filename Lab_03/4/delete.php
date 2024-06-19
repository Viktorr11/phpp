<body>
    <form method="post" action="">
        <label>Логін:
            <input type="text" name ="login">
        </label>
        <label>Пароль:
            <input type="text" name ="password">
        </label>
        <input type="submit" value="OK">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        // Check if login is provided and is not empty
        if (!empty($login)) {
            $dirPath = "./" . $login; // Assuming directories are created relative to the script's location

            // Check if directory exists
            if (is_dir($dirPath)) {
                removeDirectory($dirPath);
                echo "Directory '$login' and its contents have been deleted.";
            } else {
                echo "Directory '$login' does not exist.";
            }
        } else {
            echo "Please provide a login.";
        }
    }

    function removeDirectory($dir) {
        if ($objs = glob($dir . "/*")) {
            foreach ($objs as $obj) {
                is_dir($obj) ? removeDirectory($obj) : unlink($obj);
            }
        }
        rmdir($dir);
    }
    ?>
</body>
