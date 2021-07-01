
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Shopping
                            Cart</h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart">
                                <form>
                                    <table class="cart__table">
                                        <thead class="cart__header">
                                            <tr>
                                                <td class="cart__column cart__column--image">Image</td>
                                                <td class="cart__column cart__column--info">Product</td>
                                                <td class="cart__column cart__column--price">Price</td>
                                                <td class="cart__column cart__column--quantity">Quantity
                                                </td>
                                                <td class="cart__column cart__column--total">Total</td>
                                                <td class="cart__column cart__column--remove"></td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__body">
                                            <tr>
                                                <td class="cart__column cart__column--image"><a href="product.html"><img
                                                            srcset="<?php echo e(url('/')); ?>/images/products/product1-1.jpg, <?php echo e(url('/')); ?>/images/products/product1-1@2x.jpg 2x"
                                                            src="<?php echo e(url('/')); ?>/images/products/product1-1.jpg" alt=""></a>
                                                </td>
                                                <td class="cart__column cart__column--info">
                                                    <div class="cart__product-name"><a href="product.html">Aluminum
                                                            Chandelier</a>
                                                    </div>
                                                    <ul class="cart__product-options">
                                                        <li>Color: Gray</li>
                                                        <li>Material: Aluminum</li>
                                                    </ul>
                                                </td>
                                                <td class="cart__column cart__column--price" data-title="Price">$249.00
                                                </td>
                                                <td class="cart__column cart__column--quantity" data-title="Quantity">
                                                    <label for="quantity0" class="sr-only">Quantity</label>
                                                    <div class="form-control-number"><input id="quantity0"
                                                            class="form-control form-control-number__input"
                                                            type="number" min="1" value="1">
                                                        <div class="form-control-number__add"></div>
                                                        <div class="form-control-number__sub"></div>
                                                    </div>
                                                </td>
                                                <td class="cart__column cart__column--total" data-title="Total">$249.00
                                                </td>
                                                <td class="cart__column cart__column--remove"><button type="button"
                                                        class="button-remove button-remove--lg"><svg width="10px"
                                                            height="10px">
                                                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-10">
                                                            </use>
                                                        </svg></button></td>
                                            </tr>
                                            <tr>
                                                <td class="cart__column cart__column--image"><a href="product.html"><img
                                                            srcset="<?php echo e(url('/')); ?>/images/products/product3-1.jpg, <?php echo e(url('/')); ?>/images/products/product3-1@2x.jpg 2x"
                                                            src="<?php echo e(url('/')); ?>/images/products/product3-1.jpg" alt=""></a>
                                                </td>
                                                <td class="cart__column cart__column--info">
                                                    <div class="cart__product-name"><a href="product.html">Wooden
                                                            Closet</a></div>
                                                    <ul class="cart__product-options">
                                                        <li>Color: Dark Brown</li>
                                                    </ul>
                                                </td>
                                                <td class="cart__column cart__column--price" data-title="Price">$439.00
                                                </td>
                                                <td class="cart__column cart__column--quantity" data-title="Quantity">
                                                    <label for="quantity1" class="sr-only">Quantity</label>
                                                    <div class="form-control-number"><input id="quantity1"
                                                            class="form-control form-control-number__input"
                                                            type="number" min="1" value="3">
                                                        <div class="form-control-number__add"></div>
                                                        <div class="form-control-number__sub"></div>
                                                    </div>
                                                </td>
                                                <td class="cart__column cart__column--total" data-title="Total">
                                                    $1,317.00</td>
                                                <td class="cart__column cart__column--remove"><button type="button"
                                                        class="button-remove button-remove--lg"><svg width="10px"
                                                            height="10px">
                                                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-10">
                                                            </use>
                                                        </svg></button></td>
                                            </tr>
                                            <tr>
                                                <td class="cart__column cart__column--image"><a href="product.html"><img
                                                            srcset="<?php echo e(url('/')); ?>/images/products/product4-1.jpg, <?php echo e(url('/')); ?>/images/products/product4-1@2x.jpg 2x"
                                                            src="<?php echo e(url('/')); ?>/images/products/product4-1.jpg" alt=""></a>
                                                </td>
                                                <td class="cart__column cart__column--info">
                                                    <div class="cart__product-name"><a href="product.html">Monero
                                                            Chair</a></div>
                                                    <ul class="cart__product-options">
                                                        <li>Color: Brown</li>
                                                    </ul>
                                                </td>
                                                <td class="cart__column cart__column--price" data-title="Price">$17.00
                                                </td>
                                                <td class="cart__column cart__column--quantity" data-title="Quantity">
                                                    <label for="quantity2" class="sr-only">Quantity</label>
                                                    <div class="form-control-number"><input id="quantity2"
                                                            class="form-control form-control-number__input"
                                                            type="number" min="1" value="2">
                                                        <div class="form-control-number__add"></div>
                                                        <div class="form-control-number__sub"></div>
                                                    </div>
                                                </td>
                                                <td class="cart__column cart__column--total" data-title="Total">$34.00
                                                </td>
                                                <td class="cart__column cart__column--remove"><button type="button"
                                                        class="button-remove button-remove--lg"><svg width="10px"
                                                            height="10px">
                                                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-10">
                                                            </use>
                                                        </svg></button></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="cart__footer">
                                            <tr>
                                                <td colspan="3" class="cart__column"><a href="shop-grid.html"
                                                        class="btn btn-secondary">Back
                                                        To Shop</a></td>
                                                <td colspan="3" class="cart__column text-right"><button type="submit"
                                                        class="btn btn-primary">Update
                                                        Cart</button></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex">
                            <div class="card mb-lg-0 flex-grow-1 d-block">
                                <div class="card__header">
                                    <h4 class="decor-header">Coupon Code</h4>
                                </div>
                                <div class="card__content">
                                    <p>Etiam lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec
                                        tellus pellentesque, sollicitudin augue vitae, auctor quam.</p>
                                    <form>
                                        <div class="form-group"><input type="text" class="form-control"
                                                placeholder="Coupon Code"></div><button type="submit"
                                            class="btn btn-primary">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex">
                            <div class="card mb-lg-0 flex-grow-1">
                                <div class="card__header">
                                    <h4 class="decor-header">Calculate Shipping</h4>
                                </div>
                                <div class="card__content">
                                    <form>
                                        <div class="form-group"><select class="form-control">
                                                <option>Select a country...</option>
                                                <option>United States</option>
                                                <option>Russia</option>
                                                <option>Italy</option>
                                                <option>France</option>
                                                <option>Ukraine</option>
                                                <option>Germany</option>
                                                <option>Australia</option>
                                            </select></div>
                                        <div class="form-group"><input type="text" class="form-control"
                                                placeholder="State / Country"></div>
                                        <div class="form-group"><input type="text" class="form-control"
                                                placeholder="Town / City"></div>
                                        <div class="form-group"><input type="text" class="form-control"
                                                placeholder="Postcode / ZIP"></div><button type="submit"
                                            class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex">
                            <div class="card mb-0 flex-grow-1">
                                <div class="card__header">
                                    <h4 class="decor-header">Cart Totals</h4>
                                </div>
                                <div class="card__content cart-totals">
                                    <table class="cart-totals__table">
                                        <thead>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>$2,459.00</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <th>Tax</th>
                                                <td>$0.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <td>$2,459.00</td>
                                            </tr>
                                        </tfoot>
                                    </table><button type="submit"
                                        class="btn btn-primary btn-lg cart-totals__button">Checkout</button>
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
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/website/shop/cart.blade.php ENDPATH**/ ?>