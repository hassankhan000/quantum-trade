<?php $__env->startSection('content2'); ?>
    


    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-2"><a href="../../index-2.html" class="logo-link"><img
                                    src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                    alt="logo" />
                            </a></div>
                        <div class="nk-block-head">
                            <h5 class="text-center mb-4"><?php echo e(__('Request For Reset Password')); ?></h5>
                        </div>
                        <form action="<?php echo e(route('user.update.password')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01"><?php echo e(__('Old Password')); ?></label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="oldpassword" placeholder="<?php echo e(__('Enter Old Password')); ?>"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01"><?php echo e(__('New Password')); ?></label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="password" placeholder="<?php echo e(__('Enter New Password')); ?>"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01"><?php echo e(__('Confirm Password')); ?></label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>"></div>
                            </div>
                            <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                    type="submit"><?php echo e(__('Update')); ?></button></div>
                        </form>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>Quantum</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmc\core\resources\views/theme4/user/auth/changepassword.blade.php ENDPATH**/ ?>