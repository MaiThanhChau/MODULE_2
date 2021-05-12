<?php
    // Sử dụng var_dump($_GET) hoặc:

    //method GET
    // echo '<pre>';
    // print_r( $_GET );
    // echo '</pre>';

    // echo '<hr>';

    //method POST
    // echo '<pre>';
    // print_r( $_POST );
    // echo '</pre>';

    //method POST hoăc GET
    echo '<hr>';
    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';
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
    <form action="xu_ly.php" method="GET">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="usename" id="ten_dang_nhap">
        <br>
        <label for="">Mật khẩu</label>
        <input type="password" name="password" id="mat_khau">
        <br>
        <input type="submit" name="dang_nhap" id="" value="Đăng nhập">
    </form>
</body>
</html>