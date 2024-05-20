<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('seo'); ?>
        <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
    <?php $__env->stopPush(); ?>

    
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    
                    <div class="nk-block nk-block-middle nk-auth-body">
                        
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Register</h5>
                                <div class="nk-block-des">
                                    <p>Create New quantum Account</p>
                                </div>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php if(isset(request()->reffer)): ?>
                                <label for="formGroupExampleInput"><?php echo e(__('Reffered By')); ?></label>
                                <input type="text" class="form-control form-control-lg" value="<?php echo e(request()->reffer); ?>"
                                    name="reffered_by" placeholder="<?php echo e(__('Reffered By')); ?>" readonly>
                            <?php endif; ?>
                            <div class="form-group"><label class="form-label" for="name">First Name</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        name="fname" value="<?php echo e(old('fname')); ?>" id="name"
                                        placeholder="Enter first name"></div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Last name</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter last name" name="lname"
                                        value="<?php echo e(old('lname')); ?>"></div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Username</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter Username" name="username"
                                        value="<?php echo e(old('username')); ?>"></div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Phone</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter Phone" name="phone" value="<?php echo e(old('phone')); ?>">
                                </div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Email</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter Phone" name="email" value="<?php echo e(old('email')); ?>"
                                        id="email"></div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Password</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter Phone" name="password" id="password"
                                        placeholder="<?php echo e(__('Enter Password')); ?>"></div>
                            </div>
                            <div class="form-group"><label class="form-label" for="email">Confirm Password</label>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="email" placeholder="Enter Phone" name="password_confirmation"
                                        id="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>"></div>
                            </div>
                            <?php if(@$general->allow_recaptcha == 1): ?>
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                    data-callback="verifyCaptcha"></div>
                                <div id="g-recaptcha-error"></div>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox"><input type="checkbox"
                                        class="custom-control-input" name="check" id="exampleCheck1"><label
                                        class="custom-control-label" for="checkbox">I agree to quantum <a tabindex="-1"
                                            href="#">Privacy
                                            Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Register</button>
                            </div>
                        </form>
                        <div class="form-note-s2 pt-4"> Already have an account ? <a
                                href="<?php echo e(route('user.login')); ?>"><strong>Sign in
                                    instead</strong></a></div>
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
                                        <h4>quantum</h4>
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
                                        <h4>quantum</h4>
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
                                        <h4>quantum</h4>
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
                    "<span class='sp_text_danger'>{{__('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/auth/register.blade.php ENDPATH**/ ?>