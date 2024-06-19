<?php
include("FileWork.php");

// Example usage:
$fileName = "1.txt";
$textToWrite = "Hello!<br>";

// Write text to file
if (FileWork::WriteTextInFile($fileName, $textToWrite)) {
    echo "Text written successfully.<br>";
} else {
    echo "Failed to write text.<br>";
}

// Read text from file
$fileContent = FileWork::ReadTextFromFile($fileName);
echo "File content: " . $fileContent . "<br>";

// Delete content from file
if (FileWork::DeleteAllFromFile($fileName)) {
    echo "File content deleted successfully.<br>";
} else {
    echo "Failed to delete file content.<br>";
}
?>
