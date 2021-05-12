<?php
namespace Classes;
class Employee{
    //thuộc tính
    private $ma_nv;
    public $ho_va_ten;
    public $so_dien_thoai;
    public $email;

    // public function __construct($ma_nv,$ho_va_ten,$so_dien_thoai,$email)
    // {
    //     $this->ma_nv = $ma_nv;
    //     $this->ho_va_ten = $ho_va_ten;
    //     $this->so_dien_thoai = $so_dien_thoai;
    //     $this->email = $email;
    // }

    //phương thức lưu dữ liệu
    public function luu_du_lieu()
    {
        echo __METHOD__.'<br>';
        echo "Họ và tên: $this->ho_va_ten <br>";
        echo "Số điện thoại: $this->so_dien_thoai <br>";
        echo "Email: $this->email <br>";
    }

    //phương thức lấy tất cả dữ liệu
    public function lay_tat_ca()
    {
        
    }

    //phương thức lấy dữ liệu theo ID
    public function lay_du_lieu_theo_ID()
    {
        
    }
}

