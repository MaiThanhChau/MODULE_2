
<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>
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
                                <h3 class="card-title">Sản Phẩm</h3>
                            </div>
                            <?php if(Session::has('success')): ?>
                            <div class="btn-group" role="group" aria-label="First group">
                                <h4><strong style="color: green"><?php echo e(Session::get('success')); ?></strong></h4>
                            </div>
                            <?php endif; ?>
                            <div class="input-group">
                                <a href="<?php echo e(route('products.create')); ?>">
                                    <button class="btn btn-success" style="margin-right: 2px">Thêm</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Thể loại</th>
                                    <th>Giá</th>
                                    <th>Lượt mua</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($products): ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$key); ?></td>
                                            <td><img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="Chưa có ảnh"
                                                    style="width: 150px; height: 150px"></td>
                                            <td><?php echo e($product->name); ?></td>
                                            <td><?php echo e($product->categories->name); ?></td>
                                            <td><?php echo e($product->categories->catParents->name); ?></td>
                                            <td><?php echo e(number_format($product->price)); ?><span
                                                    class="woocommerce-Price-currencySymbol">₫</span></td>
                                            <td><?php echo e($product->sold); ?></td>
                                            <td>
                                                <a href="<?php echo e(route( 'products.edit', $product->slug )); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-warning">Sửa</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="<?php echo e(route( 'products.destroy', $product->slug )); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm(' Bạn chắc chắn muốn xóa không? ')">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="9">Tên sản phẩm không tồn tại</td>
                                    </tr>
                                <?php endif; ?>
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
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/admin/products/listsearch.blade.php ENDPATH**/ ?>