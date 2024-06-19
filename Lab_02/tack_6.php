<?php
function createArray() {
    $arr = array();
    $len = mt_rand(3, 7);
    for ($i = 0; $i < $len; $i++) {
        array_push($arr, mt_rand(10, 20));
    }
    return $arr;
}

function changeArray($arr1, $arr2) {
    // Об'єднання двох масивів
    $combinedArr = array_merge($arr1, $arr2);
    
    // Видалення повторюваних елементів
    $uniqueArr = array_unique($combinedArr);
    
    // Сортування масиву
    sort($uniqueArr);
    
    return $uniqueArr;
}

// Створення масивів
$arr1 = createArray();
$arr2 = createArray();

// Об'єднання, видалення дублікатів та сортування
$resArr = changeArray($arr1, $arr2);

// Виведення результатуючого масиву
foreach ($resArr as $i) {
    echo "$i<br>";
}
?>
