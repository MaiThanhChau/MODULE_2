<?php
//khai báo lớp SinhVien
class SinhVien{
    public function __construct()
    {
        echo '<br>'.__METHOD__;
    }
    public function retros() :void
    {
        echo '<br>'.__METHOD__;
    }
    public function __destruct()
    {
        echo '<br>'.__METHOD__;
    }
}
//khởi tạo đội tượng sinh viên
$objSinhVien = new SinhVien();

//gọi phương thức retros
$objSinhVien->retros();
