<?php
class conNguoi{
    private $id = 123;
    protected $sex = 'male';
}
class sinhvien extends conNguoi{
    //thuốc tính
    public      $name   = '';
    private     $age    = 18;

    //phương thức
    public function __construct()
    {
        // echo $this->id;
        echo $this->sex.'<br>';    
    }
    public function retros()
    {
        echo "retros <br>";
        $this->learn();
    }
    private function learn()
    {
        echo "learn <br>";
        
    }
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
    public function getAge()
    {
        return $this->age;
    }
}
//khởi tạo đối tượng
$objSinhVien = new sinhvien();

//truy xuất thuộc tính
// echo $objSinhVien->age . '<br>';

// //đặt lại thuộc tính
// $objSinhVien->age = 20;
// echo $objSinhVien->age . '<br>';

//truy xuất phương thức
$objSinhVien->retros();
echo$objSinhVien->getAge() . '<br>';
echo $objSinhVien->setAge(100) . '<br>';