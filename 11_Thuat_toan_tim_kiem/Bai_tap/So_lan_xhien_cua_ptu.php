<?php
function countElement($array, $number)
{
    $count = 0;
    for ($i=0; $i < count($array); $i++) { 
        if ($array[$i] == $number) {
            $count++;
        }
    }
    return "Số $number xuất hiện $count lần trong mảng";
}
$array = [1,2,3,4,5,1,3,1,1,5];
echo countElement($array, 1) . '<br>';
echo countElement($array, 2) . '<br>';
echo countElement($array, 3) . '<br>';