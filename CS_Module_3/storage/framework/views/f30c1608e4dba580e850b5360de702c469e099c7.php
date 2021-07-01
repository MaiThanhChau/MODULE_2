
<?php $__env->startSection('title', 'Sửa danh mục'); ?>
<?php $__env->startSection('content'); ?>
<?php
    // dd($category->toarray()); 
?>
<div class="card card-primary">
    <!-- form start -->
    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="catParent_id" required>
                    <option value="">--Chọn thể loại--</option>
                    <?php $__currentLoopData = $catParents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catParent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <option value="<?php echo e($catParent->id); ?>" 
                    <?php if($category->catParent_id == $catParent->id): ?>
                        <?php echo e('selected'); ?>

                    <?php endif; ?>><?php echo e($catParent->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Danh mục sản phẩm</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập danh mục" name="name" value="<?php echo e($category->name); ?>"  required>
                <span style="color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>