<!-- site__header -->
<header class="site__header">
    <div class="header">
        <div class="header__body">
            <div class="search">
                <form class="search__form" action="<?php echo e(route('shop.search')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input class="search__input" type="search" placeholder="Search Query..." name="search">
                    <button class="search__button" type="submit">
                        <svg width="20px" height="20px">
                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#search-20"></use>
                        </svg>
                    </button>
                    <button class="search__button search-trigger" type="button">
                        <svg width="20px" height="20px">
                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-20"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <a class="header__logo">
                <img src="<?php echo e(url('/')); ?>/images/logo.png" alt="" width="85px">
            </a>
            <nav class="header__nav main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="<?php echo e(route('shop.list')); ?>">Danh mục<svg
                                class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-megamenu">
                            <!-- megamenu -->
                            <div class="megamenu">
                                <div class="row">
                                    <?php $__currentLoopData = $catParents_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catParent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-6">
                                        <ul class="megamenu__links megamenu__links--root">
                                            <li><span><?php echo e($catParent->name); ?></span>
                                                <ul class="megamenu__links megamenu__links--sub">
                                                    <?php $__currentLoopData = $catParent->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a
                                                            href="<?php echo e(route('shoplist.categories', $categories->slug)); ?>"><?php echo e($categories->name); ?></a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div><!-- megamenu / end -->
                        </div>
                    </li>

                    <li class="main-nav__item main-nav__item--with--menu"><a class="main-nav__link"
                            href="blog.html">Blog <svg class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-menu">
                            <ul class="menu">
                                <li class="menu__item"><a class="menu__link" href="blog-list.html">Blog
                                        List</a></li>
                                <li class="menu__item"><a class="menu__link" href="post.html">Post</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <div class="header__spring"></div>
            <div class="header__indicator"><button type="button"
                    class="header__indicator-button indicator search-trigger"><span class="indicator__area"><svg
                            class="indicator__icon" width="20px" height="20px">
                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#search-20"></use>
                        </svg></span></button></div>
            <div class="header__indicator" data-dropdown-trigger="click">
                <a href="cart.html" class="header__indicator-button indicator">
                    <span class="indicator__area">
                        <span class="indicator__value">

                            <?php if(Session('cart') != null): ?>
                                <?php echo e(Session('cart')->totalQuantity); ?>

                                <?php else: ?>
                                <?php echo e(0); ?>

                            <?php endif; ?>

                        </span>
                        <svg class="indicator__icon" width="20px" height="20px">
                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cart-20"></use>
                        </svg>
                    </span>
                </a>
                <div class="header__indicator-dropdown">
                    <div class="dropcart" id="cart">
                        <div class="dropcart__products-list">
                        </div>
                        <div class="dropcart__totals">
                        </div>
                        <div class="dropcart__buttons">
                            <a class="btn btn-secondary" href="<?php echo e(route('shop.viewcart')); ?>">View Cart</a>
                            <a class="btn btn-primary" href="<?php echo e(route('shop.checkout')); ?>">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- site__header / end --><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/layout/includes/menu.blade.php ENDPATH**/ ?>