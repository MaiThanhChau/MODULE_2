<?php
// tạo mảng
$book = ['toán','lý'];

//hoặc
$book1 = array('hóa','sinh');

//hoặc
$book2 = [
    0 => 'Văn',
    1 => 'Toán',
    2 => 'Lý'
];

//hoặc
$book3 = [];
$book3[0] = "văn";
$book3[1] = "toán";
$book3[2] = "anh";

//hoặc
$book4 = [];
$book4['sach_van'] = "văn";
$book4['sach_toan'] = "toán";
$book4['sach_anh'] = "anh";


//thay đổi chỉ số của mảng
$book2 = [
    'sach_van' => 'Văn',
    'sach_toan' => 'Toán',
    'sach_ly' => 'Lý'
];

echo '<pre>';
    print_r( $book4 );
echo '</pre>';

echo $book2['sach_van'];
echo "<br>";

//thêm phần tử vào màng
$book[3] = 'văn';
// hoặc
$book[] = 'anh';
//hoặc
array_push($book, 'địa');

//foreach
foreach ($book as $key => $value) {
    echo "Chỉ số $key có giá trị là $value <br>";
}


