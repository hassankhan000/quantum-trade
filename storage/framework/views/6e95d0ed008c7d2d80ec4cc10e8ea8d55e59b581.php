

<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e(__($pageTitle)); ?></h1>
            </div>

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">

                                <?php echo csrf_field(); ?>

                                <div class="row">


                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Allow Cookie Modal')); ?></label>

                                        <select name="allow_modal" class="form-control">

                                            <option value="1" <?php echo e(@$cookie->allow_modal==1 ? 'selected' : ''); ?>>
                                                <?php echo e(__('Yes')); ?></option>
                                            <option value="0" <?php echo e(@$cookie->allow_modal==0 ? 'selected' : ''); ?>>
                                                <?php echo e(__('No')); ?></option>

                                        </select>

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Cookie Button Text')); ?></label>

                                        <input type="text" name="button_text" class="form-control" placeholder="Cookie Button Text"
                                            value="<?php echo e(@$cookie->button_text); ?>">

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for=""><?php echo e(__('Cookie Text')); ?></label>

                                        <textarea name="cookie_text" cols="30" rows="10"
                                            class="form-control"><?php echo e(__(clean(@$cookie->cookie_text))); ?></textarea>

                                    </div>

                                    <div class="form-group col-md-12">


                                        <button type="submit" class="btn btn-primary float-right"><?php echo e(__('Update Cookie Consent')); ?></button>

                                    </div>


                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u474401954/domains/quantummtradeai.com/public_html/core/resources/views/backend/setting/cookie.blade.php ENDPATH**/ ?>