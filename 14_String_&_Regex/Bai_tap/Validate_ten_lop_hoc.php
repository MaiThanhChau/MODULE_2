<?php
function validateClass($class)
{
    $pattern = '/^[CAP]{1}[0-9]{4}[GHIKLM]{1}$/';
    $validate = preg_match($pattern,$class);
    if ($validate == false) {
        echo "Tên lớp không phù hợp <br>";
    } else {
        echo "Tên lớp phù hợp <br>";
    }
}
validateClass('C0321H');
validateClass('c0321H');