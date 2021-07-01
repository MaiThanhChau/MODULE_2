
<?php $__env->startSection('title', 'Thêm Danh Mục'); ?>
<?php $__env->startSection('content'); ?>

<div class="card card-primary">
<?php
    // dd($questions->toarray());
?>
    <!-- form start -->
    <form action="<?php echo e(route('categories.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="catParent_id">
                <option value="0">--Chọn thể loại--</option>
                <?php $__currentLoopData = $catParents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catParent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($catParent->id); ?>"><?php echo e($catParent->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Danh mục sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập danh mục" name="name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>