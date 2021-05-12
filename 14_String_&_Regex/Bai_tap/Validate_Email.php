<?php
function validateEmail($email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    $validate = preg_match($pattern, $email);
    if ($validate == false) {
        echo "Email không hợp lệ <br>";
    } else {
        echo "Email hợp lệ <br>";
    }
}
validateEmail('luv295175@gmail.com');
validateEmail('@gmail.com');
