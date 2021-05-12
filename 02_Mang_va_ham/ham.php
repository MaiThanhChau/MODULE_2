<?php
/*
Khi hàm có tham chiếu: & trước biến
Thì khi gọi hàm, truyền vào hàm là 1 biến (không được truyền giá trị)
*/
function add5(&$value)
{
    $value += 5;
}
$num = 2;
add5($num);
echo $num . '<br>';

function add_five($value)
{
    $value += 5;
    return $value;
}
echo add_five(2);