<?php
    require_once 'classes\EmployeeManager.php';

    //namespace\ten_class
    use Classes\EmployeeManager;
    $objEmployeeManager = new EmployeeManager();
    $nhan_viens         = $objEmployeeManager->danh_sach();
?>
<?php
    include_once 'header.php';
?>
                <a href="add.php" class="btn btn-sm btn-primary float-right" style="margin-bottom-20px">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nhan_viens as $nhan_vien): ?>
                        <tr>
                            <td><?php echo $nhan_vien->ma_nv; ?></td>
                            <td><?php echo $nhan_vien->ho_va_ten; ?></td>
                            <td><?php echo $nhan_vien->so_dien_thoai; ?></td>
                            <td><?php echo $nhan_vien->email; ?></td>
                            <td>
                                <a href="edit.php" class="btn btn-sm btn-info">Sửa</a>
                                <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
<?php
    include_once 'footer.php';
?>