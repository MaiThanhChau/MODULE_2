<?php
$mang1 = [5,1,3,7,9];
$mang2 = [6,4,8,2,0];
$mang3 = [];
for ($i=0; $i < count($mang1); $i++) { 
    $mang3[] = $mang1[$i];
}
for ($i=0; $i < count($mang2); $i++) { 
    $mang3[count($mang2)][] = $mang2[$i];
}
echo '<pre>';
    print_r( $mang3 );
echo '</pre>';
sort($mang3);
echo '<pre>';
    print_r( $mang3 );
echo '</pre>';
sort($mang3[count($mang2)]);
echo '<pre>';
    print_r( $mang3 );
echo '</pre>';