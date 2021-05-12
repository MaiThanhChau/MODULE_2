<?php
function validatePhoneNumber($phonenumber)
{
    $pattern = '/^\([0-9]{2}\)(-)\(0[0-9]{9}\)$/';
    $validate = preg_match($pattern,$phonenumber);
    if ($validate == false) {
        echo "Số điện thoại không hợp lệ <br>";
    } else {
        echo "Số điện thoại hợp lệ <br>";
    }
}
validatePhoneNumber("(84)-(0917794111)");
validatePhoneNumber("(84)(0917794111)");
validatePhoneNumber("(84)-(9917794111)");
validatePhoneNumber("(a4)-(0917794111)");
