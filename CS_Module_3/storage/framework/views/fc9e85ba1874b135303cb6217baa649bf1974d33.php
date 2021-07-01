
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>

<div class="card card-primary">
    <?php
    // dd($questions->toarray());
?>
    <!-- form start -->
    <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" required value="<?php echo e(old('name')); ?>">
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
                <label for="price">Giá</label>
                <input type="number" class="form-control" id="price" name="price" required value="<?php echo e(old('price')); ?>">
                <span style="color:red"><?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group">
                <label>Chọn danh mục</label>
                <select name="category_id" required>
                    <?php $__currentLoopData = $catParents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catParent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <optgroup label="<?php echo e($catParent->name); ?>">
                        <?php $__currentLoopData = $totalCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $totalCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($totalCategory->catParent_id == $catParent->id): ?>
                            <option value="<?php echo e($totalCategory->id); ?>"><?php echo e($totalCategory->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </optgroup>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" cols="30" rows="10" required><?php echo e(old('description')); ?></textarea>
            </div>
            <div class="form-group">
                <label for="sort_description">Mô tả ngắn</label>
                <textarea name="sort_description" id="sort_description" cols="100" rows="2" required><?php echo e(old('sort_description')); ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ảnh chính</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" id="exampleInputFile" name="image">
                        <span style="color:red"><?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                </div>

                <label for="exampleInputFile">Ảnh phụ</label>
                <div class="input-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <span style="color:red"><?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

        </div>
    </form>
</div>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
CKEDITOR.replace('description');
CKEDITOR.replace('sort_description');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/admin/products/create.blade.php ENDPATH**/ ?>