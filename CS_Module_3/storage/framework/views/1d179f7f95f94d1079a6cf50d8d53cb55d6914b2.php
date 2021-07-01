
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
                        <h1 class="page__header-title decor-header decor-header--align--center">Checkout
                        </h1>
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="alert alert-lg alert-primary">Returning customer? <a href="">Click
                                    here to login</a></div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="card mb-lg-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Billing details</h4>
                                </div>
                                <div class="card__content">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="checkout-first-name">First
                                                    Name</label> <input type="text" class="form-control"
                                                    id="checkout-first-name" placeholder="First Name"></div>
                                            <div class="form-group col-md-6"><label for="checkout-last-name">Last
                                                    Name</label> <input type="text" class="form-control"
                                                    id="checkout-last-name" placeholder="Last Name"></div>
                                        </div>
                                        <div class="form-group"><label for="checkout-company-name">Company
                                                Name <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="checkout-company-name"
                                                placeholder="Company Name">
                                        </div>
                                        <div class="form-group"><label for="checkout-country">Country</label> <select
                                                id="checkout-country" class="form-control">
                                                <option>Select a country...</option>
                                                <option>United States</option>
                                                <option>Russia</option>
                                                <option>Italy</option>
                                                <option>France</option>
                                                <option>Ukraine</option>
                                                <option>Germany</option>
                                                <option>Australia</option>
                                            </select></div>
                                        <div class="form-group"><label for="checkout-street-address">Street
                                                Address</label> <input type="text" class="form-control"
                                                id="checkout-street-address" placeholder="Street Address">
                                        </div>
                                        <div class="form-group"><label for="checkout-address">Apartment,
                                                suite, unit etc. <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="checkout-address">
                                        </div>
                                        <div class="form-group"><label for="checkout-city">Town /
                                                City</label> <input type="text" class="form-control" id="checkout-city">
                                        </div>
                                        <div class="form-group"><label for="checkout-state">State /
                                                County</label> <input type="text" class="form-control"
                                                id="checkout-state"></div>
                                        <div class="form-group"><label for="checkout-postcode">Postcode /
                                                ZIP</label> <input type="text" class="form-control"
                                                id="checkout-postcode"></div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="checkout-email">Email
                                                    address</label> <input type="email" class="form-control"
                                                    id="checkout-email" placeholder="Email address"></div>
                                            <div class="form-group col-md-6"><label for="checkout-phone">Phone</label>
                                                <input type="text" class="form-control" id="checkout-phone"
                                                    placeholder="Phone"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    value="" id="checkout-create-account">
                                                <label class="form-check-label" for="checkout-create-account">Create an
                                                    account?</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    value="" id="checkout-different-address"> <label
                                                    class="form-check-label" for="checkout-different-address">Ship to a
                                                    different
                                                    address?</label></div>
                                        </div>
                                        <div class="form-group"><label for="checkout-comment">Order notes
                                                <span class="text-muted">(Optional)</span></label> <textarea
                                                id="checkout-comment" class="form-control" rows="4"></textarea></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="card mb-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Your Order</h4>
                                </div>
                                <div class="card__content">
                                    <table class="checkout__totals">
                                        <thead class="checkout__totals-header">
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="checkout__totals-products">
                                            <tr>
                                                <td>Aluminum Chandelier × 1</td>
                                                <td>$249.00</td>
                                            </tr>
                                            <tr>
                                                <td>Wooden Closet × 3</td>
                                                <td>$1,317.00</td>
                                            </tr>
                                            <tr>
                                                <td>Monero Chair × 2</td>
                                                <td>$34.00</td>
                                            </tr>
                                        </tbody>
                                        <tbody class="checkout__totals-subtotals">
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>$2,459.00</td>
                                            </tr>
                                            <tr>
                                                <th>Store Credit</th>
                                                <td>$-20.00</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>$25.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__totals-footer">
                                            <tr>
                                                <th>Total</th>
                                                <td>$2,464.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="payment-methods">
                                        <ul class="payment-methods__list">
                                            <li class="payment-methods__item payment-methods__item--active">
                                                <label class="payment-methods__item-header"><input
                                                        class="payment-methods__item-radio" type="radio"
                                                        name="checkout_payment_method"> <span
                                                        class="payment-methods__item-title">Direct bank
                                                        transfer</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Make your payment directly into our bank account.
                                                        Please use your Order ID as the payment reference.
                                                        Your order will not be shipped until the funds have
                                                        cleared in our account.</div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item"><label
                                                    class="payment-methods__item-header"><input
                                                        class="payment-methods__item-radio" type="radio"
                                                        name="checkout_payment_method"> <span
                                                        class="payment-methods__item-title">Check
                                                        payments</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Please send a check to Store Name, Store Street,
                                                        Store Town, Store State / County, Store Postcode.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item"><label
                                                    class="payment-methods__item-header"><input
                                                        class="payment-methods__item-radio" type="radio"
                                                        name="checkout_payment_method"> <span
                                                        class="payment-methods__item-title">Cash on
                                                        delivery</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Pay with cash upon delivery.</div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item"><label
                                                    class="payment-methods__item-header"><input
                                                        class="payment-methods__item-radio" type="radio"
                                                        name="checkout_payment_method"> <span
                                                        class="payment-methods__item-title">PayPal</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Pay via PayPal; you can pay with your credit card if
                                                        you don’t have a PayPal account.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><button type="submit" class="btn btn-primary btn-lg">Place
                                        Order</button>
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
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/website/shop/checkout.blade.php ENDPATH**/ ?>