<?php
$age = 17;
try{
    //các công việc xử lý, diễn ra tại đây
    if ($age < 18) {
        throw new Exception("Yêu cầu lớn hơn 18 tuổi");
    }

    //sau khi ném ra ngoại lệ thì các câu lệnh tiếp theo sẽ k được thực thi
    echo 'hihi';
} 
catch( Exception $e ){
    //xử lý lỗi tại khối này
    echo $e->getMessage();
}
finally{
    //Các câu lệnh bên trong khối finally sẽ luôn luôn được thực thi, kể cả trong trường hợp có xảy ra ngoại lệ hay không.
    echo '<br> Thực hiện khối finally';
}
/* Lưu ý:
    - Có try thì phải có catch: Nếu k là lỗi Uncaught Exception
    - Ném ngoại lệ: dùng throw new DOI_TUONG( được khởi tạo từ lớp Exception hoặc CustomException ) 
    - Sau throw thì k thực hiện các đoạn mã tiếp theo
    - Khối try: thực hiện các xử lý thuật toán (ném ngoại lệ)
    - Khối catch: thực hiện xử lý các lỗi (ngoại lệ) mà được ném ra
    - Khối Finally: luôn luôn chạy
*/