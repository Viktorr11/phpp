<?php
$arr1 = [];
$arr2 = [];
$path1 = "files" . DIRECTORY_SEPARATOR . "file1.txt";
$path2 = "files" . DIRECTORY_SEPARATOR . "file2.txt";

// Function to read file into array
function readFileToArray($path)
{
    $data = [];
    $file = fopen($path, 'r');
    while (!feof($file)) {
        $line = fgets($file);
        if (!empty($line)) {
            $tmp = explode(" ", $line);
            $data = array_merge($data, $tmp);
        }
    }
    fclose($file);
    return $data;
}

// Reading files into arrays
$arr1 = readFileToArray($path1);
$arr2 = readFileToArray($path2);

// Task A: Elements in file1 that are not in file2
$res1 = array_diff($arr1, $arr2);
echo "Завдання А: " . implode(" ", $res1);
file_put_contents("files" . DIRECTORY_SEPARATOR . "resFile1.txt", implode("\n", $res1));

echo "<br>";

// Task B: Common elements between file1 and file2
$res2 = array_intersect($arr1, $arr2);
$res2 = array_unique($res2);
echo "Завдання Б: " . implode(" ", $res2);
file_put_contents("files" . DIRECTORY_SEPARATOR . "resFile2.txt", implode("\n", $res2));

echo "<br>";

// Task C: Elements in file1 that appear more than once in file2
$tmp2 = array_intersect($arr1, $arr2);
$res3 = array_keys(array_filter(array_count_values($tmp2), function($v) { return $v >= 2; }));
echo "Завдання В: " . implode(" ", $res3);
file_put_contents("files" . DIRECTORY_SEPARATOR . "resFile3.txt", implode("\n", $res3));
?>
