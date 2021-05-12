<?php
// Cách tạo ra biến toàn cục
global $phep_tinh;
$phep_tinh = 'Cộng';
function tinh_tong($so_a,$so_b){
    // Muốn dùng biến toàn cục phải gọi lại nó ở trong hàm
    global $phep_tinh ;

    // Có thể gán lại giá trị cho biến toàn cục
    $phep_tinh = 'Trừ';
    
    $kq = $so_a+$so_b;
    // kq là biến cục bộ. Phạm vi sử dụng: trong hàm

    // có 2 cách nối chuỗi
    echo "Tổng là: $kq <br>"; //1
    echo 'Tổng là: ' . $kq . '<br>'; //2
}
tinh_tong(5,7);
echo "$phep_tinh <br>";
$a = 5;
$b = 10;
if ($a > $b) {
    echo "$a lớn hơn $b <br>";
} else {
    echo "$b lớn hơn $a <br>";
}

// xuất ra từ 1 đến 100
for ($i=1; $i <= 100; $i++) { 
 echo $i . ' ';
}

$books = ['toán','lý','hóa','văn','sử','địa'];
//foreach
foreach ($books as $key => $value) {
    echo $key . '-' . $value . '<br>';
}
//for (dùng count thay cho length)
for ($i=0; $i < count($books); $i++) { 
    echo $i+1 . '-' . $books[$i] . '<br>';
}

