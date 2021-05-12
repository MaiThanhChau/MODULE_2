<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $USD = $_POST["USD"];
        $ti_gia = 23000;
        $VND = $USD*$ti_gia;
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
    <div>
        <form action="" method="POST">
            <table style="border-spacing: 50px 10px">
                <tr>
                    <td>
                        <input type="text" name="USD" id="" placeholder="Nhập số tiền USD">
                    </td>
                    <td>
                        <input type="submit" name="" id="" value="&#8660">
                    </td>
                    <td>
                        <?php
                            if (isset($USD)) {
                                echo " $VND VND";
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>