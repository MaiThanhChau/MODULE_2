
<?php $__env->startSection('title', 'Danh mục sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <h3 class="card-title">Danh mục</h3>
                            </div>
                            <?php if(Session::has('success')): ?>
                            <div class="btn-group" role="group" aria-label="First group">
                                <h4><strong style="color: green"><?php echo e(Session::get('success')); ?></strong></h4>
                            </div>
                            <?php endif; ?>
                            <div class="input-group">
                                <a href="<?php echo e(route('categories.create')); ?>" method="get">
                                    <button class="btn btn-success" style="margin-right: 2px">Thêm</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Thể loại</th>
                                    <th colspan="2" style="width: 20%">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$key); ?></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><?php echo e($category->catParents->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route( 'categories.edit', $category->id )); ?>" method="get">
                                            <button class="btn btn-warning">Sửa</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route( 'categories.destroy', $category->id )); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger" onclick="return confirm(' Bạn chắc chắn muốn xóa không? ')">Xóa</button>
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
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/admin/categories/list.blade.php ENDPATH**/ ?>