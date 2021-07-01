
<?php $__env->startSection('title', 'Sửa sản phẩm'); ?>
<?php $__env->startSection('content'); ?>

<div class="card card-primary">
    <?php
    // dd($questions->toarray());
?>
    <!-- form start -->
    <form action="<?php echo e(route('products.update', $product->slug)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($product->name); ?>" required>
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
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>" required>
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
                        <?php $__currentLoopData = $totalCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($category->catParent_id == $catParent->id): ?>
                                <option value="<?php echo e($category->id); ?>" 
                                    <?php if($product->category_id == $category->id): ?>
                                    <?php echo e('selected'); ?>

                                    <?php endif; ?>
                                ><?php echo e($category->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </optgroup>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" cols="30" rows="10" required><?php echo e($product->description); ?>"</textarea>
                <span style="color:red"><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>
            <div class="form-group">
                <label for="sort_description">Mô tả ngắn</label>
                <textarea name="sort_description" id="sort_description" cols="5" rows="10" required><?php echo e($product->sort_description); ?></textarea>
                <span style="color:red"><?php $__errorArgs = ['sort_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <?php echo e($message); ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
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
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </div>
    </form>
</div>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
CKEDITOR.replace('sort_description');
CKEDITOR.replace('description');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>