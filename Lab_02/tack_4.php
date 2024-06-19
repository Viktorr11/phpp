<?php
function generateRandomArray($size, $min, $max) {
    $arr = array();
    for ($i = 0; $i < $size; $i++) {
        array_push($arr, mt_rand($min, $max));
    }
    return $arr;
}

function printArray($arr) {
    foreach ($arr as $i) {
        echo $i . "<br>";
    }
}

function sameElements($arr) {
    $resArr = array();
    $elementsCount = array_count_values($arr);

    foreach ($elementsCount as $element => $count) {
        if ($count > 1) {
            echo $element . "<br>";
        }
    }
}

$arr = generateRandomArray(10, 0, 10);

echo "Generated Array:<br>";
printArray($arr);
echo "<br>Repeated Elements:<br>";
sameElements($arr);
?>
