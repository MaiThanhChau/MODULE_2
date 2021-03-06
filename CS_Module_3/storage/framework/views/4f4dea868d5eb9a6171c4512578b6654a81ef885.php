
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
                        <h1 class="page__header-title decor-header decor-header--align--center">My Account
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
                        <div class="col-md-6 col-xl-5 offset-xl-1 d-flex">
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Login</h4>
                                </div>
                                <div class="card__content">
                                    <form>
                                        <div class="form-group"><label>Email address</label> <input type="email"
                                                class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="form-group"><label>Password</label> <input type="password"
                                                class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group form-check"><input type="checkbox"
                                                class="form-check-input"> <label class="form-check-label">Remember
                                                Me</label></div><button type="submit"
                                            class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 d-flex">
                            <div class="card flex-grow-1 mb-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Register</h4>
                                </div>
                                <div class="card__content">
                                    <form>
                                        <div class="form-group"><label>Email address</label> <input type="email"
                                                class="form-control" placeholder="Enter email">
                                        </div>
                                        <div class="form-group"><label>Password</label> <input type="password"
                                                class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group"><label>Repeat Password</label> <input type="password"
                                                class="form-control" placeholder="Password">
                                        </div><button type="submit" class="btn btn-primary">Register</button>
                                    </form>
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
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CodeGym\Module_3\Laravel\CS_Module_3\resources\views/website/account.blade.php ENDPATH**/ ?>