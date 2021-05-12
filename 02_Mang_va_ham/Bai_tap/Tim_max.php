<?php
function timMax($mang)
{
    $max = $mang[0][0];
    $toa_do_x = 0;
    $toa_do_y = 0;
    $count = 0;
    for ($x=0; $x < count($mang); $x++) { 
        for ($y=0; $y < count($mang[$x]); $y++) { 
            if ($mang[$x][$y] > $max) {
                $max = $mang[$x][$y];
                $toa_do_x = $x;
                $toa_do_y = $y;
            }
        }
    }
    echo "Phần tử lớn nhất là: $max <br> Tọa độ của $max là: ($toa_do_x:$toa_do_y)";
}
$mang = [[3,4,1,5,9,7,4],[1,6,3,6,8,0,5],[5,2,1,6,10,3,6,8]];
timMax($mang);