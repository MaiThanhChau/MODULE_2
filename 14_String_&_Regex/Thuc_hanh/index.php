<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "Kí tự đầu tiên của chuỗi là chữ hoa!";
        echo '<br>' . substr($str,0,1);
    } else {
        echo "Kí tự đầu tiên của chuỗi k phải là chữ hoa!";
        echo '<br>' . substr($str,0,1);
    }
}
isFirstLetterUpperCase('Mai Thanh Châu');
