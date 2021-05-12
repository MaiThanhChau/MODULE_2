<?php
//tạo ra 1 interface bằng từ khóa interface TEN_INTERFACE{}
//nó không phải là 1 lớp (class)
//các phương thức đều là trừu tượng = k có phần thân{}
//không thể khai báo các phương thức và thuộc tính bình thường
//chỉ có thể khai báo hằng số
interface HinhHoc{
    const TEN_THUOC_TINH = '';
    public function tinhCV();
    public function tinhDT();
}

//khi sử dụng từ 1 interface: sử dụng từ khóa implements, cần phải khai báo lại các phương thức trừu tượng thành bình thường
class HinhVuong implements HinhHoc{
    public function tinhCV()
    {
        
    }
    public function tinhDT()
    {
        
    }
}