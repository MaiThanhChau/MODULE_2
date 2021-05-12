<?php
//khai báo namespace cho class EmployeeManager
namespace Classes;

//kéo file Employee.php vào để sử dụng
require_once 'Employee.php';

//sử dụng namespace để dùng class Employee
use Classes\Employee;
class EmployeeManager{
    //phương thức hiển thị danh sách
    public function danh_sach()
    {
        $filename = 'data.json';

        //lấy dữ liệu cũ, dùng hàm file_get_contents
        $data_json = file_get_contents($filename);

        //chuyển json sang array
        $data_array = json_decode($data_json);

        return $data_array;

        
        // $employees = [
        //     new Employee(1,'Nguyễn Văn A','0987654321','nva@gmail.com'),
        //     new Employee(2,'Nguyễn Văn B','0912345678','nvb@gmail.com')
        // ];
        // return $employees;
    }

    //phương thức thêm mới (C - create)
    public function them($employee) //add.php: $objEmployeeManager->them($_POST);
    { 
        //khởi tạo đối tượng 
        $objEmployee = new Employee();
        $objEmployee->ho_va_ten = $employee['ho_va_ten'];
        $objEmployee->so_dien_thoai = $employee['so_dien_thoai'];
        $objEmployee->email = $employee['email'];

        //gọi phương thức luu_du_lieu
        $objEmployee->luu_du_lieu();
        die();
        $filename = 'data.json';
        //lấy dữ liệu cũ, dùng hàm file_get_contents
        $data_json = file_get_contents($filename);

        //chuyển json sang array
        $data_array = json_decode($data_json);

        //đưa vào mảng mới với đối tượng truyền vào
        $data_array[] = $employee;

        //chuyển array sang json
        $array_to_json = json_encode($data_array);

        //lưu vào file
        $luu = file_put_contents($filename, $array_to_json);

        //chuyển hướng
        header("Location: index.php");
    }

    //phương thức xem thông tin (R - read)
    public function xem()
    {
        
    }

    //phương thức cập nhật (U - update)
    public function sua()
    {
        
    }

    //phương thức xóa (D - delete)
    public function xoa()
    {
        
    }
}