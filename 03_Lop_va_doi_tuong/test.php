<?php
class sinhvien{
    //thuốc tính
    public $name = '';
    public $age  = '18';

    //phương thức
    function __construct()
    {
        
    }
    function retros()
    {
        echo "retros <br>";
    }
    function learn()
    {
        echo "learn <br>";
        
    }
    function setAge($newAge)
    {
        $this->age = $newAge;
    }
    function getAge()
    {
        return $this->age;
    }
}
//khởi tạo đối tượng
$objSinhVien = new sinhvien();

//truy xuất thuộc tính
echo $objSinhVien->age . '<br>';

//đặt lại thuộc tính
$objSinhVien->age = 20;
echo $objSinhVien->age . '<br>';

//truy xuất phương thức
$objSinhVien->retros();
echo$objSinhVien->getAge() . '<br>';
echo $objSinhVien->setAge(100) . '<br>';