<?php
class Dancer{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}

//hàng đợi 1
$queueNam = new SplQueue();

//hàng đợi 2
$queueNu = new SplQueue();

//tạo 1 số dancer nam và nữ vào hàng đợi tương ứng
//nam
$queueNam->enqueue( new Dancer('Hùng','nam') );
$queueNam->enqueue( new Dancer('Châu','nam') );
$queueNam->enqueue( new Dancer('Đạt','nam') );
$queueNam->enqueue( new Dancer('Hoàn','nam') );
$queueNam->enqueue( new Dancer('A Hà','nam') );
$queueNam->enqueue( new Dancer('A Tâm','nam') );
$queueNam->enqueue( new Dancer('Dương','nam') );
//nữ
$queueNu->enqueue( new Dancer('Thảo','nữ') );
$queueNu->enqueue( new Dancer('Ngọc Anh','nữ') );
$queueNu->enqueue( new Dancer('Hồng','nữ') );
$queueNu->enqueue( new Dancer('Ánh','nữ') );
$queueNu->enqueue( new Dancer('Trang','nữ') );
$queueNu->enqueue( new Dancer('Thanh','nữ') );
// echo '<pre>';
//     print_r( $queueNam );
//     print_r( $queueNu );
// echo '</pre>';

$pairs              = [];
$nam_waiting        = [];
$nu_waiting         = [];
while (!$queueNu->isEmpty() || !$queueNam->isEmpty()) {
    
    if( !$queueNu->isEmpty() && !$queueNam->isEmpty() ){
        $pairs[] = $queueNam->dequeue()->name .' - '.$queueNu->dequeue()->name;
    }elseif( $queueNu->isEmpty() && !$queueNam->isEmpty() ){
        $nam_waiting[] = $queueNam->dequeue()->name;
    }elseif( !$queueNu->isEmpty() && $queueNam->isEmpty() ){
        $nu_waiting[] = $queueNu->dequeue()->name;
    }
}

foreach ($pairs as $key => $value) {
    echo "Cặp $value <br>";
}
echo 'Còn ' . count($nam_waiting) . ' dancer nam đợi <br>';
echo 'Còn ' . count($nu_waiting) . ' dancer nữ đợi';

// echo '<pre>';
//     print_r( $pairs  );
//     print_r( $nam_waiting  );
//     print_r( $nu_waiting  );
// echo '</pre>';