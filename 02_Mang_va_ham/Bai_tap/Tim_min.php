<?php
function tim_min($mang_so_nguyen)
{
    $min = $mang_so_nguyen[0];
    $index = 0;
    for ($i=0; $i < count($mang_so_nguyen); $i++) { 
        if ($mang_so_nguyen[$i] < $min) {
            $min = $mang_so_nguyen[$i];
            $index = $i;
        }
    }
    return 'Số nhỏ nhất trong mảng là '.$min.' ở chỉ số thứ '.$index;
}
function taoMang()
{
    $rand = mt_rand(1, 100); 
    $arr = [];
    for ($i = 0; $i < $rand; $i++) { 
        $arr[$i] = mt_rand(1, 100);
    }
    return $arr;
}
$mang = taoMang();
echo '<pre>';
    print_r( $mang );
echo '</pre>';
echo tim_min($mang);