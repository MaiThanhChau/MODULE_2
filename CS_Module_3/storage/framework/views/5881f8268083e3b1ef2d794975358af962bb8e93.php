
<div class="dropcart__products-list">
    <?php $__currentLoopData = $newCart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="dropcart__product">
        <div class="dropcart__product-image">
            <a href="<?php echo e(route('shop.product', $product['productInfo']->slug)); ?>">
                <img src="<?php echo e(asset('storage/'.$product['productInfo']->image)); ?>" alt="" width="70px">
            </a>
        </div>
        <div class="dropcart__product-info">
            <div class="dropcart__product-name"><a href="<?php echo e(route('shop.product', $product['productInfo']->slug)); ?>"><?php echo e($product['productInfo']->name); ?></a></div>
            <div class="dropcart__product-price"><?php echo e($product['quantity']); ?> x
                <?php echo e(number_format($product['productInfo']->price)); ?>

                <span class="woocommerce-Price-currencySymbol"> ₫</span>
            </div>
        </div>
        <button type="button" class="dropcart__product-remove button-remove" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này')">
            <svg width="10px" height="10px" data-id="<?php echo e($product['productInfo']->id); ?>">
                <use xlink:href="<?php echo e(url('/')); ?>/images/sprite.svg#cross-10"></use>
            </svg>
        </button>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="dropcart__totals">
    <table>
        <tr>
            <th>Total</th>
            <td><?php echo e(number_format($newCart->totalPrice)); ?><span class="woocommerce-Price-currencySymbol"> ₫</span></td>
        </tr>
    </table>
</div>
<div class="dropcart__buttons">
    <a class="btn btn-secondary" href="<?php echo e(route('shop.viewcart')); ?>">Giỏ hàng</a>
    <a class="btn btn-primary" href="<?php echo e(route('shop.checkout')); ?>">Thanh toán</a>
</div><?php /**PATH C:\xampp\htdocs\CS_Module_3\resources\views/website/shop/cart-item.blade.php ENDPATH**/ ?>