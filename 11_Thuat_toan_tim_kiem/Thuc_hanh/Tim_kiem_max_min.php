<?php
function findMin($array)
{
    $min = $array[0];
    for ($i=1; $i < count($array); $i++) { 
        if ($array[$i]<$min) {
            $min = $array[$i];
        }
    }
    return "Số nhỏ nhất trong mảng là $min";
}
function findMax($array)
{
    $max = $array[0];
    for ($i=1; $i < count($array); $i++) { 
        if ($array[$i]>$max) {
            $max = $array[$i];
        }
    }
    return "Số lớn nhất trong mảng là $max";
}
$array = [3,5,1,6,8,3,0];
echo findMin($array);
echo '<br>';
echo findMax($array);