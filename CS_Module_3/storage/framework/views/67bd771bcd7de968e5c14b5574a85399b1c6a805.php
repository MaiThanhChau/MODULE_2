<!-- site__header -->
<header class="site__header">
    <div class="header">
        <div class="header__body">
            <a href="index.html" class="header__logo">
                <img src="<?php echo e(url('/')); ?>/images/large.png" alt="" width="85px">
            </a>
            <nav class="header__nav main-nav">
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a class="main-nav__link" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="main-nav__item"><a class="main-nav__link" href="">Categories <svg
                                class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-megamenu">
                            <!-- megamenu -->
                            <div class="megamenu">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="megamenu__links megamenu__links--root">
                                            <li><a href="">Living Room</a>
                                                <ul class="megamenu__links megamenu__links--sub">
                                                    <li><a href="">Sofas</a></li>
                                                    <li><a href="">Sectional Sofas</a></li>
                                                    <li><a href="">Coffee Tables</a></li>
                                                    <li><a href="">TV Stands</a></li>
                                                    <li><a href="">Living Room Sets</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Bedroom</a>
                                                <ul class="megamenu__links megamenu__links--sub">
                                                    <li><a href="">Beds</a></li>
                                                    <li><a href="">Headboards</a></li>
                                                    <li><a href="">Nightstands</a></li>
                                                    <li><a href="">Dressers</a></li>
                                                    <li><a href="">Mirrored Dressers</a></li>
                                                    <li><a href="">Chest of Drawers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="megamenu__links megamenu__links--root">
                                            <li><a href="">Accent Furniture</a>
                                                <ul class="megamenu__links megamenu__links--sub">
                                                    <li><a href="">Accent Chairs</a></li>
                                                    <li><a href="">Accent Tables</a></li>
                                                    <li><a href="">End and Side Tables</a></li>
                                                    <li><a href="">Console Tables</a></li>
                                                    <li><a href="">Accent Cabinets</a></li>
                                                    <li><a href="">Benches</a></li>
                                                    <li><a href="">Bar Cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Home Office</a>
                                                <ul class="megamenu__links megamenu__links--sub">
                                                    <li><a href="">Desks</a></li>
                                                    <li><a href="">Office Chairs</a></li>
                                                    <li><a href="">Bookcases</a></li>
                                                    <li><a href="">Office Storage</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- megamenu / end -->
                        </div>
                    </li>
                    <li class="main-nav__item main-nav__item--with--menu"><a class="main-nav__link"
                            href="shop-grid.html">Shop <svg class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-menu">
                            <ul class="menu">
                                <li class="menu__item"><a class="menu__link" href="shop-grid.html">Shop</a>
                                </li>
                                <li class="menu__item"><a class="menu__link" href="product.html">Product</a>
                                </li>
                                <li class="menu__item"><a class="menu__link" href="cart.html">Cart</a></li>
                                <li class="menu__item"><a class="menu__link" href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav__item main-nav__item--with--menu"><a class="main-nav__link"
                            href="blog.html">Blog <svg class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-menu">
                            <ul class="menu">
                                <li class="menu__item"><a class="menu__link" href="blog-list.html">Blog
                                        List</a></li>
                                <li class="menu__item"><a class="menu__link" href="post.html">Post</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="main-nav__item main-nav__item--with--menu"><a class="main-nav__link"
                            href="about-us.html">My account<svg class="main-nav__link-arrow" width="9px" height="6px">
                                <use xlink:href="images/sprite.svg#arrow-down-9x6"></use>
                            </svg></a>
                        <div class="main-nav__sub-menu">
                            <ul class="menu">
                                <li class="menu__item"><a class="menu__link" href="about-us.html">About
                                        Us</a></li>
                                <li class="menu__item"><a class="menu__link" href="contact-us.html">Contact
                                        Us</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="header__spring"></div>
            <div class="header__indicator"><button type="button"
                    class="header__indicator-button indicator search-trigger"><span class="indicator__area"><svg
                            class="indicator__icon" width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#search-20"></use>
                        </svg></span></button></div>
            <div class="header__indicator" data-dropdown-trigger="click"><a href="cart.html"
                    class="header__indicator-button indicator"><span class="indicator__area"><span
                            class="indicator__value">2</span> <svg class="indicator__icon" width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#cart-20"></use>
                        </svg></span></a>
                <div class="header__indicator-dropdown">
                    <div class="dropcart">
                        <div class="dropcart__products-list">
                            <div class="dropcart__product">
                                <div class="dropcart__product-image"><a href="product.html"><img
                                            srcset="images/products/product1-1.jpg, images/products/product1-1@2x.jpg 2x"
                                            src="images/products/product1-1.jpg" alt=""></a></div>
                                <div class="dropcart__product-info">
                                    <div class="dropcart__product-name"><a href="product.html">Aluminum
                                            Chandelier</a></div>
                                    <ul class="dropcart__product-options">
                                        <li>Color: Gray</li>
                                        <li>Material: Aluminum</li>
                                    </ul>
                                    <div class="dropcart__product-price">1 x $249.00</div>
                                </div><button type="button" class="dropcart__product-remove button-remove"><svg
                                        width="10px" height="10px">
                                        <use xlink:href="images/sprite.svg#cross-10"></use>
                                    </svg></button>
                            </div>
                            <div class="dropcart__product">
                                <div class="dropcart__product-image"><a href="product.html"><img
                                            srcset="images/products/product3-1.jpg, images/products/product3-1@2x.jpg 2x"
                                            src="images/products/product3-1.jpg" alt=""></a></div>
                                <div class="dropcart__product-info">
                                    <div class="dropcart__product-name"><a href="product.html">Wooden
                                            Closet</a></div>
                                    <ul class="dropcart__product-options">
                                        <li>Color: Dark Brown</li>
                                    </ul>
                                    <div class="dropcart__product-price">3 x $439.00</div>
                                </div><button type="button" class="dropcart__product-remove button-remove"><svg
                                        width="10px" height="10px">
                                        <use xlink:href="images/sprite.svg#cross-10"></use>
                                    </svg></button>
                            </div>
                            <div class="dropcart__product">
                                <div class="dropcart__product-image"><a href="product.html"><img
                                            srcset="images/products/product4-1.jpg, images/products/product4-1@2x.jpg 2x"
                                            src="images/products/product4-1.jpg" alt=""></a></div>
                                <div class="dropcart__product-info">
                                    <div class="dropcart__product-name"><a href="product.html">Monero
                                            Chair</a></div>
                                    <ul class="dropcart__product-options">
                                        <li>Color: Brown</li>
                                    </ul>
                                    <div class="dropcart__product-price">2 x $17.00</div>
                                </div><button type="button" class="dropcart__product-remove button-remove"><svg
                                        width="10px" height="10px">
                                        <use xlink:href="images/sprite.svg#cross-10"></use>
                                    </svg></button>
                            </div>
                        </div>
                        <div class="dropcart__totals">
                            <table>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$2,459.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>$2,459.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="dropcart__buttons"><a class="btn btn-secondary" href="cart.html">View
                                Cart</a> <a class="btn btn-primary" href="checkout.html">Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- site__header / end --><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/layout/includes/menu.blade.php ENDPATH**/ ?>