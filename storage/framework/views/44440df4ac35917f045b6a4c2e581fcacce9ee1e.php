<?php $__env->startPush('seo'); ?>
    <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-2"><a href="/" class="logo-link"><img
                                    src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                    alt="logo" />
                            </a></div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Sign-In</h5>
                                <div class="nk-block-des">
                                    <p>Access the DashLite panel using your email and passcode.</p>
                                </div>
                            </div>
                        </div>
                        <form action="" class="form-validate is-alter" autocomplete="off" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label" for="email-address">Email</label><a
                                        class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                </div>
                                <div class="form-control-wrap"><input autocomplete="off" type="email" name="email"
                                        value="<?php echo e(old('email')); ?>" class="form-control form-control-lg" id="email-address"
                                        placeholder="Enter your email address"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label" for="password">Password</label><a
                                        class="link link-primary link-sm" tabindex="-1"
                                        href="<?php echo e(route('user.forgot.password')); ?>">Forgot
                                        Password?</a></div>
                                <div class="form-control-wrap"><a tabindex="-1" href="#"
                                        class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                    <input autocomplete="new-password" type="password" class="form-control form-control-lg"
                                        id="password" name="password" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                    type="submit"><?php echo e(__('Log In')); ?></button></div>
                        </form>
                        <div class="form-note-s2 pt-4"> New on our platform? <a href="<?php echo e(route('user.register')); ?>">Create
                                an account</a></div>
                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="nk-block-between">
                            <ul class="nav nav-sm">
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Terms &
                                        Condition</a></li>
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Privacy
                                        Policy</a></li>
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3"
                                        href="#">Help</a></li>
                                <li class="nav-item dropup"><a
                                        class="dropdown-toggle dropdown-indicator has-indicator link link-primary fw-normal py-2 px-3"
                                        data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/english.png" alt=""
                                                        class="language-flag"><span class="language-name">English</span></a>
                                            </li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/spanish.png" alt=""
                                                        class="language-flag"><span class="language-name">Español</span></a>
                                            </li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/french.png" alt=""
                                                        class="language-flag"><span
                                                        class="language-name">Français</span></a></li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/turkey.png" alt=""
                                                        class="language-flag"><span
                                                        class="language-name">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <p>&copy; 2023 DashLite. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                            srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-b.png"
                                            srcset="/demo6/images/slides/promo-b2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-c.png"
                                            srcset="/demo6/images/slides/promo-c2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-dots"></div>
                        <div class="slider-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='sp_text_danger'>@changeLang('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum\core\resources\views/theme4/user/auth/login.blade.php ENDPATH**/ ?>