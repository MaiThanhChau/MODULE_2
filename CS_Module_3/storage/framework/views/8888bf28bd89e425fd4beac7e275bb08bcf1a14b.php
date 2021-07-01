
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>

<div class="card card-primary">
    <?php
    // dd($questions->toarray());
?>
    <!-- form start -->
    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($product->name); ?>">
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>">
            </div>
            <div class="form-group">
                <label>Chọn danh mục</label>
                <select name="category_id">
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
                <textarea name="description" id="description" cols="30" rows="10"><?php echo e($product->description); ?>"</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ảnh chính</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" id="exampleInputFile" name="image">
                    </div>
                </div>

                <label for="exampleInputFile">Ảnh phụ</label>
                <div class="input-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="images[]">
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
    </form>
</div>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
CKEDITOR.replace('description');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>