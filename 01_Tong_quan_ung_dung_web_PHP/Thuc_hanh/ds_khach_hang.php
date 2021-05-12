
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .thumbnail{
                height: 60px;
                width: 100px;
                overflow: hidden;
            }
            .thumbnail img{
                width:100%;
            }
        </style>
    </head>
    <body>
        <table border="0">
          <caption><h2>Danh sách khách hàng</h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <!-- <?php
          $customerlist = array(
                "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/img1.jpg"),
                "2" =>array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/img2.jpg"),
                "3" =>array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/img3.jpg"),
                "4" =>array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/img4.jpg"),
                "5" =>array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/img5.jpg")
          );
          foreach($customerlist as $key => $values){
              echo "<tr>";
              echo "<td>".$key."</td>";
              echo "<td>".$values['ten']."</td>";
              echo "<td>".$values['ngaysinh']."</td>";
              echo "<td>".$values['diachi']."</td>";
              echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
              echo "</tr>";
          }
          ?> -->

          <?php
            $mang = [
                        ["Mai Văn Hoàn","1983-08-20","Hà Nội","images/img1.jpg"],
                        ["Nguyễn Văn Nam","1983-08-21","Bắc Giang","images/img2.jpg"],
                        ["Nguyễn Thái Hòa","1983-08-22","Nam Định","images/img3.jpg"],
                        ["Trần Đăng Khoa","1983-08-17","Hà Tây","images/img4.jpg"],
                        ["Nguyễn Đình Thi","1983-08-19","Hà Nội","images/img5.jpg"]
                    ];
            for ($i=0; $i < count($mang); $i++) { 
                  echo '<tr>';
                  echo '<td>' . $i+1 . '</td>';
                  for ($y=0; $y < count($mang[$i])-1; $y++) { 
                        echo '<td>' . $mang[$i][$y] . '</td>';
                  }
                  echo "<td><div class='thumbnail'><image src = '".$mang[$i][3]."'/></div></td>";
                  echo '</tr>';
            }
          ?>
        </table>
    </body>
</html>