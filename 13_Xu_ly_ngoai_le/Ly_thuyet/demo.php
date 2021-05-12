<?php
class CustomException extends Exception{
    public function errorMessage()
    {
        $loi = '';
        $loi .= '<br> File chưa lỗi: ' . $this->getFile();
        $loi .= '<br> Dòng chưa lỗi: ' . $this->getLine();
        $loi .= '<br> Mã chưa lỗi: ' . $this->getCode();
        $loi .= '<br> Nội dung lỗi: ' . $this->getMessage();
        return $loi;
    }
}
$age = 17;
try{
    //các công việc xử lý, diễn ra tại đây
    if ($age < 18) {
        throw new CustomException("Yêu cầu lớn hơn 18 tuổi");
    }

    //sau khi ném ra ngoại lệ thì các câu lệnh tiếp theo sẽ k được thực thi
    echo 'hihi';
} 
catch( CustomException $e ){
    //xử lý lỗi:  tại khối này
    echo $e->errorMessage();
}
finally{
    //Các câu lệnh bên trong khối finally sẽ luôn luôn được thực thi, kể cả trong trường hợp có xảy ra ngoại lệ hay không.
    echo '<br> Thực hiện khối finally';
}