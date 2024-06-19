<body>
    <form method="post" action="">
        <label>Ім'я:<br>
            <input type="text" name="name">
        </label><br>
        <label>Коментар:<br>
            <input type="text" name="comment">
        </label><br>
        <input type="submit" name="OK" value="OK">
    </form>
    <table style="border-collapse: collapse; width: 50%; margin-top: 20px;">
        <tr>
            <th style="border: 1px solid black; padding: 7px;">Ім'я</th>
            <th style="border: 1px solid black; padding: 7px;">Коментар</th>
        </tr>
        <?php
        $filePath = "files" . DIRECTORY_SEPARATOR . "comments.txt";
        
        // Read existing comments from file
        $lines = file($filePath, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            if (!empty($line)) {
                list($name, $comment) = explode(' ---> ', $line);
                echo "<tr><td style='border: 1px solid black; padding: 7px;'>$name</td><td style='border: 1px solid black; padding: 7px;'>$comment</td></tr>";
            }
        }
        ?>
    </table>
</body>

<?php
$infoList = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['comment'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        
        $info = "{$name} ---> {$comment}\n";
        $filePath = "files" . DIRECTORY_SEPARATOR . "comments.txt";
        
        // Append comment to file
        $file = fopen($filePath, 'a+');
        fwrite($file, $info);
        fclose($file);
        
        // Optional: Redirect after form submission to prevent form resubmission on page refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>
