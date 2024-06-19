<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="">
        <textarea name="text"></textarea><br>
        <input type="submit" value="OK">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Regular expression pattern to match URLs
        $pattern = "/(https?:\/\/)?([\w-]{1,32}\.[\w-]{1,32})[^\s@]*/";
        
        // Get the text from the textarea
        $text = $_POST['text'];
        
        // Match all URLs in the text
        preg_match_all($pattern, $text, $arrMatches);
        
        // Output each matched URL
        foreach ($arrMatches[0] as $url) {
            echo "$url<br>";
        }

        // Replace each URL with a predefined string
        $res = preg_replace($pattern, "тут була адреса сайту<br>", $text);
        
        // Output the modified text
        echo $res;
    }
    ?>
</body>
</html>
