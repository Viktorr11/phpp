<?php

class FileWork
{
    private static $dir = "text";

    public static function WriteTextInFile($fileName, $text)
    {
        $filePath = self::$dir . DIRECTORY_SEPARATOR . $fileName;
        $file = fopen($filePath, 'a');
        if ($file) {
            fwrite($file, $text . PHP_EOL); // Append text with a new line
            fclose($file);
            return true; // Return true on success
        } else {
            return false; // Return false on failure
        }
    }

    public static function ReadTextFromFile($fileName): string
    {
        $filePath = self::$dir . DIRECTORY_SEPARATOR . $fileName;
        $text = "";
        $file = fopen($filePath, 'r');
        if ($file) {
            while (!feof($file)) {
                $text .= fgets($file);
            }
            fclose($file);
        }
        return $text;
    }

    public static function DeleteAllFromFile($fileName)
    {
        $filePath = self::$dir . DIRECTORY_SEPARATOR . $fileName;
        $file = fopen($filePath, 'w');
        if ($file) {
            fwrite($file, "");
            fclose($file);
            return true; // Return true on success
        } else {
            return false; // Return false on failure
        }
    }
}

// Example usage:
$fileName = "example.txt";
$textToWrite = "This is a test text.";
FileWork::WriteTextInFile($fileName, $textToWrite);

$readText = FileWork::ReadTextFromFile($fileName);
echo "Read text: " . $readText . "\n";

FileWork::DeleteAllFromFile($fileName);
echo "File deleted.";
