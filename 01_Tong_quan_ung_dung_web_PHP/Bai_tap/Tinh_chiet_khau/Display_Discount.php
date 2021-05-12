<?php
$mo_ta = $_POST["mo_ta"];
$gia = $_POST["gia"];
$chiet_khau = $_POST["chiet_khau"];
$luong_ck = $gia * $chiet_khau * 0.01;
$gia_sau_ck = $gia - $luong_ck;
echo "Mô tả sản phẩm: $mo_ta <br>";
echo "Giá niêm yết: $gia <br>";
echo "Tỉ lệ chiết khấu (%): $chiet_khau <br>";
echo "Lượng chiết khấu: $luong_ck <br>";
echo "Giá sau khi đã được chiết khấu: $gia_sau_ck <br>";
