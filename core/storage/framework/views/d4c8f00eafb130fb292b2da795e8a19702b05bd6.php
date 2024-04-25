<?php $__env->startSection('content2'); ?>
    


    

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Pricing Plans</h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                            <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                                        ->where('user_id', Auth::id())
                                        ->where('next_payment_date', '!=', null)
                                        ->where('payment_status', 1)
                                        ->count();
                                ?>
                                <div class="col-md-6 col-xxl-3">
                                    <div class="card card-bordered pricing">
                                        <div class="pricing-head">
                                            <div class="pricing-title">
                                                <h4 class="card-title title"><?php echo e($plan->plan_name); ?></h4>
                                                
                                            </div>
                                            <div class="card-text">
                                                <div class="row">
                                                    <div class="col-6"><span class="h4 fw-500">
                                                            <?php echo e(__('ROI')); ?>

                                                        </span><span
                                                            class="sub-text"><?php echo e(number_format($plan->return_interest, 2)); ?>

                                                            <?php if($plan->interest_status == 'percentage'): ?>
                                                                <?php echo e('%'); ?>

                                                            <?php else: ?>
                                                                <?php echo e(@$general->site_currency); ?>

                                                            <?php endif; ?>
                                                        </span></div>
                                                    <div class="col-6"><span class="h4 fw-500">
                                                            <?php echo e(__('Every')); ?> </span><span class="sub-text">
                                                            <?php echo e($plan->time->name); ?></span></div>
                                                            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <?php if($plan->amount_type == 0): ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('Minimum')); ?> </span>
                                                        <span class="ms-auto">
                                                            <?php echo e(number_format($plan->minimum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('Maximum')); ?> </span>
                                                        <span class="ms-auto">
                                                            <?php echo e(number_format($plan->maximum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('Amount')); ?> </span>
                                                        <span class="ms-auto">
                                                            <?php echo e(number_format($plan->amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if($plan->return_for == 1): ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('For')); ?> </span>
                                                        <span class="ms-auto"> <?php echo e($plan->how_many_time); ?>

                                                            <?php echo e(__('Times')); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('For')); ?> </span>
                                                        <span class="ms-auto"> <?php echo e(__('Lifetime')); ?></span>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if($plan->capital_back == 1): ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('Capital Back')); ?> </span>
                                                        <span class="ms-auto"> <?php echo e(__('YES')); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="w-50"><?php echo e(__('Capital Back')); ?> </span>
                                                        <span class="ms-auto"> <?php echo e(__('NO')); ?></span>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                            <?php if($plan_exist >= $plan->invest_limit): ?>
                                                <div class="pricing-action"><a
                                                        class="btn btn-outline-light main-btn plan-btn disabled"><?php echo e(__('Max Limit exceeded')); ?></a>
                                                </div>
                                            <?php else: ?>
                                                <div class="pricing-action"><a
                                                        href="<?php echo e(route('user.gateways', $plan->id)); ?>"
                                                        class="btn btn-outline-light main-btn plan-btn "><?php echo e(__('Invest Now')); ?></a>
                                                </div>
                                                <?php if(auth()->guard()->check()): ?>
                                                    <div class="pricing-action"><button
                                                            class=" main-btn2 btn btn-outline-light  balance"
                                                            data-plan="<?php echo e($plan); ?>"
                                                            data-url="" data-bs-target="#modalZoom"><?php echo e(__('Invest Using Balance')); ?></button>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade zoom" id="modalZoom" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form style="width: 100%;" action="<?php echo e(route('user.investmentplan.submit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Invest Now')); ?></h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for=""><?php echo e(__('Invest Amount')); ?></label>
                                <input type="text" name="amount" class="form-control">
                                <input type="hidden" name="plan_id" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="main-btn btn btn-primary"><span><?php echo e(__('Invest Now')); ?></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            'use strict'

            $('.balance').on('click', function() {
                const modal = $('#modalZoom');
                modal.find('input[name=plan_id]').val($(this).data('plan').id);
                modal.modal('show')
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmc\core\resources\views/theme4/pages/invest.blade.php ENDPATH**/ ?>