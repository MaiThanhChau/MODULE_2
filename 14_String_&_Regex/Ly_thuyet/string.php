<?php
//bò kêu "moo"
$chuoi_1 = 'Bò kêu "moo"';
$chuoi_2 = 'Bò kêu \'moo\'';
echo $chuoi_1;
echo '<br>'.$chuoi_2;
$a = 5;
$b = 6;
$ket_qua_1 = 'A có ' . $a . ', B có ' . $b;
$ket_qua_2 = "A có $a, B có $b";
echo '<br>' . $ket_qua_1;
echo '<br>' . $ket_qua_2;
echo '<br> Tên của bạn là ' . $_GET['name'] . ', tuổi là ' . $_GET['age'];
echo '<hr>';
echo 'strlen($string): hàm trả về độ dài chuỗi <br>';
echo strlen($chuoi_1) . ' - Bò kêu "moo"';
echo '<hr>';
echo 'str_word_count($string): hàm trả về số từ trong chuỗi, không đếm số, phân biệt từ có dấu hay k có dấu <br>';
echo str_word_count('Mai Thanh Chau') . ' - Mai Thanh Chau <br>';
echo str_word_count('Mai Thanh Châu') . ' - Mai Thanh Châu <br>';
echo '<hr>';
