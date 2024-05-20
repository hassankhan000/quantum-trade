<?php

    $content = content('breadcrumb.content');

?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('seo'); ?>
        <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
    <?php $__env->stopPush(); ?>

    
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
                        <?php if($general->is_email_verification_on && !auth()->user()->ev): ?>
                            <div class="nk-block-head">
                                <h5 class="text-center mb-4"><?php echo e(__('Verify Email')); ?></h5>
                            </div>
                            <form class="reg-form" action="<?php echo e(route('user.authentication.verify.email')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01"><?php echo e(__('Verification Code')); ?></label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code"
                                            placeholder="<?php echo e(__('Enter Verification Code')); ?>"></div>
                                </div>
                                <?php if(@$general->allow_recaptcha): ?>
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit"><?php echo e(__('Verify Now')); ?></button></div>
                            </form>
                        <?php elseif($general->is_sms_verification_on && !auth()->user()->sv): ?>
                            <form method="POST" action="<?php echo e(route('user.authentication.verify.sms')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01"><?php echo e(__('Sms Verify Code')); ?></label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"></div>
                                </div>
                                <?php if(@$general->allow_recaptcha): ?>
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit"><?php echo e(__('Verify Now')); ?></button></div>
                            </form>
                            <?php endif; ?>
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

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/auth/email_sms_verify.blade.php ENDPATH**/ ?>