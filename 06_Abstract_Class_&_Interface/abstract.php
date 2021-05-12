<?php
//lớp trừu tượng là lớp có abstract phía trước
//phương thức trừu tượng là phương thức có abstract phía trước
//nếu trong lớp có các phương thức trừu tượng thì lớp đó phải là lớp trừu tượng abstract class
//chỉ có thể khai báo phương thức trừu tượng với mức độ truy cập là public và protected
//có thể khai báo các thuộc tính và phương thức bình thường
abstract class HinhHoc{
    abstract public function tinhCV();
    abstract public function tinhDT();
    public function vehinh($tenhinh, $mau = '')
    {
        echo "vẽ hình học {$tenhinh}";
    }
}
//khi thừa kế từ 1 lớp trừu tượng (abstract class) thì phải khai báo lại các phương thức trừu tượng thành k trừu tượng
class HinhVuong extends HinhHoc{
    public function tinhCV()
    {
        
    }
    public function tinhDT()
    {
        
    }
    public function vehinh($tenhinh, $mau = '')
    {
        echo "vẽ hình vuông {$tenhinh}, có màu sắc là {$mau}"; //nạp chồng
    }
}
$objHinhVuong = new HinhVuong();
$objHinhVuong->vehinh('abc','đỏ');
