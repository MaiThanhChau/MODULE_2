<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login {
            width: 230px;
            margin: 0;
            padding: 10px;
            border: 1px #CCC solid;
        }

        h2 {
            text-align: center;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }
    </style>

</head>

<body>
    <?php
        $First_Operand = '';
        $Second_Operand = '';
        $Operator = '';
        $flag = false;
        $Result = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $First_Operand = $_POST["First_Operand"];
            $Second_Operand = $_POST["Second_Operand"];
            $Operator = $_POST["Operator"];
            if (is_numeric($First_Operand) && is_numeric($Second_Operand)) {
                switch ($Operator) {
                    case '+':
                        echo $Result = $First_Operand + $Second_Operand;
                        break;
                    case '-':
                        echo $Result = $First_Operand - $Second_Operand;
                        break;
                    case '*':
                    case 'x':
                        echo $Result = $First_Operand * $Second_Operand;
                        break;
                    case '/':
                    case ':':
                        if ($Second_Operand == 0) {
                            try {
                                throw new Exception("Không thể chia cho số 0");
                                
                            } catch (\Exception $e) {
                                echo $e->getMessage();
                            }
                            $Result = "Lỗi";
                        } else {
                        echo $Result = $First_Operand / $Second_Operand;
                        }
                        break;
                    default:
                        $Result = "Vui lòng nhập đúng phép tính";
                        break;
                }
            } else {
                $flag = true;
                $Result = "Không thực hiện được";
            }
        }
    ?>
    <form action="" method="POST">
        <div class="login">
            <h2>Simple Calculator</h2>
            <label>First Operand: <input type="text" value="<?php echo $First_Operand; ?>" name="First_Operand" size="30"/></label> <br>
            <label>Operator: 
                <select name="Operator" id="" value="<?php echo $Operator; ?>">
                    <option value="+">+</option>       
                    <option value="-">-</option>       
                    <option value="*">*</option>       
                    <option value="/">/</option>       
                </select>
            </label> <br>
            <label>Second Operand: <input type="text" value="<?php echo $Second_Operand; ?>" name="Second_Operand" size="30"/></label>
            <input type="submit" value="Calculate" />
        </div>
        <p>
            <?php
                if ($flag == false) {
                    echo "$First_Operand $Operator $Second_Operand = $Result"; 
                } else {
                    echo $Result;
                }
            ?>
        </p>
    </form>
</body>

</html>