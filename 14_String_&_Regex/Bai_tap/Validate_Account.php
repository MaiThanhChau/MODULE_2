<?php
function validateAccount($account)
{
    $pattern = '/^[_a-z0-9]{6,}$/';
    $validate = preg_match($pattern,$account);
    if ($validate == false) {
        echo "Account không hợp lệ <br>";
    } else {
        echo "Account hợp lệ <br>";
    }
}
validateAccount('Mai_Thanh_Châu');
validateAccount('mai_thanh_chau');
validateAccount('luv295175');
validateAccount('mai_thanh_châu');
validateAccount('lUv295175');