
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Shop List
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 order-1 order-lg-0">
                        <div class="block">
                            <aside class="sidebar">
                                <!-- widget-categories -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Danh mục</h4>
                                    </div>
                                    <div class="widget__body">
                                        <div class="widget-categories" data-collapse
                                            data-collapse-open-class="widget-categories__item--open">
                                            <ul class="widget-categories__list">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="widget-categories__item" data-collapse-item>
                                                    <button class="widget-categories__arrow" data-collapse-trigger>
                                                    </button>
                                                    <a href="<?php echo e(route('shoplist.categories', $category->slug)); ?>"
                                                        class="widget-categories__link"><?php echo e($category->name); ?>

                                                        <span
                                                            class="widget-categories__counter">(<?php echo e(count($category->products)); ?>)</span>
                                                    </a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- widget-categories / end -->
                                <!-- widget-filters -->
                                <div class="widget widget--card">
                                    <div class="widget__title">
                                        <h4 class="decor-header">Sản phẩm bán chạy nhất</h4>
                                    </div>
                                    <div class="widget__body">
                                        <ul class="widget-products-list">
                                            <?php $__currentLoopData = $bestsellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestseller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="widget-products-list__item">
                                                <div class="widget-products-list__image"><a
                                                        href="<?php echo e(route('shop.product', $bestseller->slug)); ?>"><img
                                                            src="<?php echo e(asset('storage/'.$bestseller->image)); ?>"
                                                            width="100%" height="50px" alt=""></a></div>
                                                <div class="widget-products-list__info">
                                                    <div class="widget-products-list__category"><a
                                                            href=""><?php echo e($bestseller->categories->name); ?></a></div>
                                                    <div class="widget-products-list__name"><a
                                                            href="<?php echo e(route('shop.product', $bestseller->slug)); ?>"><?php echo e($bestseller->name); ?></a>
                                                    </div>
                                                    <div class="widget-products-list__price">
                                                        <?php echo e(number_format($bestseller->price)); ?>

                                                        <span class="woocommerce-Price-currencySymbol"> ₫</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div><!-- widget-products-list / end -->
                            </aside>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options view-options">
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__control">
                                        <form action="<?php echo e(route('shoplist.filter')); ?>" method="get">
                                            <?php echo csrf_field(); ?>
                                            <select onchange="this.form.submit()" name="filter">
                                                <option value="0">Tất cả sản phẩm</option>
                                                <?php $__currentLoopData = $catParents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catParent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($catParent->id); ?>" <?php if($catParent_id==$catParent->id): ?>
                                                    <?php echo e('selected'); ?>

                                                    <?php endif; ?>

                                                    ><?php echo e($catParent->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="products-view__list products-list products-list--layout--list">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--list">
                                            <div class="product-card__image"><a
                                                    href="<?php echo e(route('shop.product', $product->slug)); ?>"><img
                                                        src="<?php echo e(asset('storage/'.$product->image)); ?>" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a
                                                        href=""><?php echo e($product->categories->name); ?></a></div>
                                                <div class="product-card__name"><a
                                                        href="<?php echo e(route('shop.product', $product->slug)); ?>"><?php echo e($product->name); ?></a>
                                                </div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-title">Reviews (15)
                                                    </div>
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body"><svg
                                                                    class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star rating__star--active"
                                                                    width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg> <svg class="rating__star" width="13px"
                                                                    height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal">
                                                                        </use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#star-normal-stroke">
                                                                        </use>
                                                                    </g>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__description">
                                                    <?php echo $product->sort_description; ?>
                                                </div>
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">
                                                        <?php echo e(number_format($product->price)); ?><span
                                                            class="woocommerce-Price-currencySymbol"> ₫</span></div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list">
                                                        <a class="btn btn-primary product-card__addtocart" type="button"
                                                            onclick="addCart(<?php echo e($product->id); ?>)"
                                                            href="javascript:">Thêm vào giỏ hàng
                                                        </a>
                                                        <button
                                                            class="btn btn-light btn-svg-icon product-card__wishlist"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#wishlist-16">
                                                                </use>
                                                            </svg></button> <button
                                                            class="btn btn-light btn-svg-icon product-card__compare"
                                                            type="button"><svg width="16px" height="16px">
                                                                <use
                                                                    xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#compare-16">
                                                                </use>
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="products-view__pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <?php echo e($products->appends(request()->query())); ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div><!-- site__body / end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/website/shop/shoplistfilter.blade.php ENDPATH**/ ?>