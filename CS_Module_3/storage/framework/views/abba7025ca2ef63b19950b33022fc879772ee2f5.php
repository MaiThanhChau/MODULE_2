<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(url('/')); ?>/images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/style.css"><!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendor/fontawesome/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-97489509-8');
    </script>
</head>

<body>
    <!-- site -->
    <div class="site">
        <div class="site__container">
            <?php echo $__env->make('layout.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('layout.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div><!-- site / end -->
    <!-- js -->
    <script src="<?php echo e(url('/')); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/vendor/nouislider/nouislider.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/vendor/svg4everybody/svg4everybody.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/main.js"></script>
    <script>
    svg4everybody();
    </script>
</body>

</html><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/layout/index.blade.php ENDPATH**/ ?>