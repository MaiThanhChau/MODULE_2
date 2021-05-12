<?php
class ConNguoi{
    private $ten = 'Nguyễn Văn A';
    public $tuoi = 18;
    public function goi_ten()
    {
        echo '<br>'.$this->ten;
    }

    //không cho ghi đè khi kế thừa bằng từ khóa final
    // final public function di_chuyen()
    // {
    //  echo '<br>'.__METHOD__;   
    // }

    public function di_chuyen()
    {
     echo '<br>'.__METHOD__;   
    }
    public function giao_tiep()
    {
     echo '<br> Giao tiếp tiếng Việt';   
    }

}

//thừa kế với từ khóa extends ten_class_cha
class SinhVien extends ConNguoi{

    
    //ghi đè phương thức
    public function giao_tiep() 
    {
        echo '<br> Giao tiếp tiếng Việt';   
        echo '<br> Giao tiếp tiếng Anh';   
    }
    public function di_chuyen()
    {
        //gọi tới phương thức cha với từ khóa parent
        parent::di_chuyen();

        //gọi tới phương thức cha với từ khóa ten_class_cha
        // ConNguoi::di_chuyen();

        echo '<br>'.__METHOD__;   
    }
}

//khởi tạo đối tượng sinh viên
$objSinhVien = new SinhVien();

//gọi tới phương thức của lớp cha   
$objSinhVien->di_chuyen();
$objSinhVien->giao_tiep();
echo '<br>'.$objSinhVien->ten;
echo '<br>'.$objSinhVien->tuoi;
