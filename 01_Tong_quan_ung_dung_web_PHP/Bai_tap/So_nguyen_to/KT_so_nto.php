<?php
    $so = '';
    $count = 0;
    $flag = false;
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $so = $_POST["so"];
        for ($i=2; $i < $so; $i++) { 
            if ($so%$i==0) {
                $count++;
                $flag = true;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="" id="" placeholder="Nhập số cần kiểm tra" value="<?php echo $so; ?>">
        <input type="submit" name="so" id="" value="Kiểm tra">
        <span><?php if (!$flag) {
            echo "$so là số nguyên tố";
        } else {
            echo "$so không phải là số nguyên tố";
        } ?></span>
    </form>
    <a href="">Các số nguyên tố nhỏ hơn 100</a>
</body>
</html>