<?php
$arr = array("ло", "а", "ке", "з", "ву", "ді", "це", "ш", "чка", "ам", "я", "зу");

$quant = mt_rand(2, 6);
$res = '';
for ($i = 0; $i < $quant; $i++) {
    $index = mt_rand(0, count($arr) - 1);
    $res .= $arr[$index];
}
echo $res;
?>
