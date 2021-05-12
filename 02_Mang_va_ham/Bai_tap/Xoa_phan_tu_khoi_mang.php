<?php
function taoMang()
{
    $rand = mt_rand(1, 10); 
    $arr = [];
    for ($i = 0; $i < $rand; $i++) { 
        $arr[$i] = mt_rand(1, 100);
    }
    return $arr;
}
function xoaPhantu($value, $arr)
{
    for ($i=0; $i < count($arr); $i++) { 
        $c = 0;
        if ($arr[$i]==$value) {
            // unset($arr[$i]);
            array_splice($arr,$i,1);
        }
    }
    return $arr;
}
$mang = taoMang();
$kq = xoaPhantu(5,$mang);
echo '<pre>';
    print_r( $kq );
echo '</pre>';

