
<?php $__env->startSection('content'); ?>

<!-- site__body -->
<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__header -->
        <div class="page__header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ol class="page__header-breadcrumbs breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="">Furniture</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                        </ol>
                        <h1 class="page__header-title decor-header decor-header--align--center">
                            <span style="color:green">Thanh toán thành công!!!</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container">
                    <form action="<?php echo e(route('shop.post-checkout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="alert alert-lg alert-primary"><a href="<?php echo e(route('home')); ?>">Quay về trang chủ</a></div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div><!-- site__body / end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/website/shop/checkoutsuccess.blade.php ENDPATH**/ ?>