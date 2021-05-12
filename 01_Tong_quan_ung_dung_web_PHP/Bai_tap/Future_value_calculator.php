<?php
    $gtHientai  = '';
    $lai        = '';
    $soNam      = '';
    $flag       = false;
    $GTHT       = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gtHientai  = $_POST["gtHientai"];
        $GTHT       = $gtHientai;
        $lai        = $_POST["lai"];
        $soNam      = $_POST["soNam"];
        for ($i=1; $i <= $soNam; $i++) { 
            $gtTuonglai = 0;
            $gtTuonglai = $gtHientai + ($gtHientai*$lai);
            $gtHientai = $gtTuonglai;
        }
        $flag = true;
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
        Số tiền ban đầu:    <input type="text" name="gtHientai" id="" value="<?php echo $GTHT ?>">
        Lãi suất năm:       <input type="text" name="lai" id="" value="<?php echo $lai ?>">
        Số năm đầu tư:      <input type="text" name="soNam" id="" value="<?php echo $soNam ?>">
        <input type="submit" name="" id="" value="Calculator">
    </form>
    <?php
        if ($flag) {
        echo "Giá trị tương lai sẽ nhận được là: $gtTuonglai"; 
        }    
    ?>
</body>
</html>