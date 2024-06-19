<?php
$arr = [];
$pathFile = "files" . DIRECTORY_SEPARATOR . "fileTask3.txt";
$resFilePath = "files" . DIRECTORY_SEPARATOR . "resFileTask3.txt";


$file = fopen($pathFile, 'r');
while (!feof($file)) {
    $s = fgets($file);
    if (!empty($s)) {
        $tmp = explode(" ", $s);
        foreach ($tmp as $word) {
            $arr[] = trim($word); 
        }
    }
}
fclose($file);


sort($arr);


foreach ($arr as $item) {
    echo "{$item} ";
}


$resFile = fopen($resFilePath, 'w');
fputs($resFile, implode(" ", $arr)); 
fclose($resFile);
?>
