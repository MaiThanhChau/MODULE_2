
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Giỏ hàng</h1>
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
                                <form action="<?php echo e(route('shop.cartupdate')); ?>" method="GET">
                                <?php echo csrf_field(); ?>
                                    <table class="cart__table">
                                        <thead class="cart__header">
                                            <tr>
                                                <td class="cart__column cart__column--image">Ảnh</td>
                                                <td class="cart__column cart__column--info">Sản phẩm</td>
                                                <td class="cart__column cart__column--price">Giá</td>
                                                <td class="cart__column cart__column--quantity">Số lượng
                                                </td>
                                                <td class="cart__column cart__column--total">Tổng tiền</td>
                                                <td class="cart__column cart__column--remove"></td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__body">
                                            <?php if($newCart->products != null): ?>
                                            <?php $__currentLoopData = $newCart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $total = $product['quantity'] * $product['productInfo']->price;
                                            ?>
                                            <tr>
                                                <td class="cart__column cart__column--image"><a
                                                        href="<?php echo e(route('shop.product', $product['productInfo']->slug)); ?>"><img
                                                            src="<?php echo e(asset('storage/'.$product['productInfo']->image)); ?>"
                                                            alt=""></a>
                                                </td>
                                                <td class="cart__column cart__column--info">
                                                    <div class="cart__product-name"><a
                                                            href="<?php echo e(route('shop.product', $product['productInfo']->slug)); ?>"><?php echo e($product['productInfo']->name); ?></a>
                                                    </div>
                                                </td>
                                                <td class="cart__column cart__column--price" data-title="Price">
                                                    <?php echo e(number_format($product['productInfo']->price)); ?>

                                                    <span class="woocommerce-Price-currencySymbol"> ₫</span>
                                                </td>
                                                <td class="cart__column cart__column--quantity" data-title="Quantity">
                                                    <label for="quantity0" class="sr-only">Quantity</label>
                                                    <div class="form-control-number">
                                                        <input id="quantity0" name="qty[<?php echo e($product['productInfo']->id); ?>]"
                                                            class="form-control form-control-number__input"
                                                            type="number" min="1" value="<?php echo e($product['quantity']); ?>">
                                                        <div class="form-control-number__add"></div>
                                                        <div class="form-control-number__sub"></div>
                                                    </div>
                                                </td>
                                                <td class="cart__column cart__column--total" data-title="Total">
                                                    <?php echo e(number_format($total)); ?><span
                                                        class="woocommerce-Price-currencySymbol"> ₫</span>
                                                </td>
                                                <td class="cart__column cart__column--remove">
                                                    <a type="button" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                                        href="<?php echo e(route('shop.delete-cartshopping', $product['productInfo']->id)); ?>"
                                                        class="dropcart__product-remove button-remove">
                                                        <svg width="10px" height="10px">
                                                            <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-10">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="5" style="text-align: center">
                                                    <h1><span style="color:red">Chưa có sản phẩm nào trong giỏ
                                                            hàng</span></h1>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot class="cart__footer">
                                            <tr>
                                                <td colspan="3" class="cart__column"><a href="<?php echo e(route('home')); ?>"
                                                        class="btn btn-secondary">Trang chủ</a></td>
                                                <td colspan="3" class="cart__column text-right"><button type="submit"
                                                        class="btn btn-primary">Cập nhật giỏ hàng</button></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <div class="card mb-0 flex-grow-1">
                                <div class="card__header">
                                    <h4 class="decor-header">Tổng giỏ hàng</h4>
                                </div>
                                <div class="card__content cart-totals">
                                    <table class="cart-totals__table">
                                        <tbody>
                                            <tr>
                                                <th>Tổng sản phẩm</th>
                                                <td><?php echo e($newCart->totalQuantity); ?></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tổng tiền</th>
                                                <td><?php echo e(number_format($newCart->totalPrice)); ?>

                                                    <span class="woocommerce-Price-currencySymbol"> ₫</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table><a type="button" href="<?php echo e(route('shop.checkout')); ?>"
                                        class="btn btn-primary btn-lg cart-totals__button">Thanh toán</a>
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
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/website/shop/cart.blade.php ENDPATH**/ ?>