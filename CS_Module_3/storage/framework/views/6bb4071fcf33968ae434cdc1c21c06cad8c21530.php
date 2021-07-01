
<?php $__env->startSection('title', 'Danh mục đơn hàng'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="btn-toolbar justify-content-between" role="toolbar"
                            aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <h3 class="card-title">Danh mục</h3>
                            </div>
                            <?php if(Session::has('success')): ?>
                            <div class="btn-group" role="group" aria-label="First group">
                                <h4><strong style="color: green"><?php echo e(Session::get('success')); ?></strong></h4>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th colspan="3" style="width: 20%">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$key); ?></td>
                                        <td><?php echo e($order->user_name); ?></td>
                                        <td><?php echo e($order->user_address); ?></td>
                                        <td><?php echo e($order->user_email); ?></td>
                                        <td><?php echo e($order->user_phone); ?></td>
                                        <td><?php echo e(number_format($order->amount)); ?><span
                                                class="woocommerce-Price-currencySymbol"> ₫</span></td>
                                        <td><?php echo e($order->status); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('orders.order_detail', $order->id)); ?>">
                                                <button class="btn btn-primary">Xem</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('orders.edit', $order->id)); ?>">
                                                <button class="btn btn-warning">Sửa</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-danger"
                                                    onclick="return confirm(' Bạn chắc chắn muốn xóa không? ')">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/admin/orders/list.blade.php ENDPATH**/ ?>