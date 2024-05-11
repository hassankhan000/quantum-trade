<?php $__env->startSection('content2'); ?>
    
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Investment Log')); ?></h5>
                                <form action="" method="get" class="d-inline-flex">
                                    <input type="date" class="form-control form-control-sm me-3"
                                        placeholder="Search User" name="date">
                                    <button type="submit" class="btn main-btn btn-sm"><?php echo e(__('Search')); ?></button>
                                </form>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div style="overflow: auto;" class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="table site-table">
                                        <thead>
                                            <tr class="bg-yellow">
                                                <th><?php echo e(__('Plan Name')); ?></th>
                                                <th><?php echo e(__('Interest')); ?></th>
                                                <th><?php echo e(__('Invest Amount')); ?></th>
                                                <th><?php echo e(__('Payment Date')); ?></th>
                                                <th><?php echo e(__('Next Payment Date')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $interestLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-caption="<?php echo e(__('Plan Name')); ?>">
                                                        <?php echo e($log->payment->plan->plan_name); ?></td>
                                                    <td data-caption="<?php echo e(__('Interest')); ?>">
                                                        <?php echo e(number_format($log->interest_amount, 2)); ?>

                                                        <?php echo e(@$general->site_currency); ?></td>
                                                    <td data-caption="<?php echo e(__('Invest Amount')); ?>">
                                                        <?php echo e(number_format($log->payment->amount, 2)); ?>

                                                        <?php echo e(@$general->site_currency); ?></td>
                                                    <td data-caption="<?php echo e(__('Payment Date')); ?>"><?php echo e($log->created_at); ?>

                                                    </td>
                                                    <td data-caption="<?php echo e(__('Next Payment Date')); ?>">
                                                        <?php echo e(isset($log->payment->next_payment_date) ? $log->payment->next_payment_date : 'Plan Expired'); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td class="text-center no-data-table" colspan="100%">
                                                        <?php echo e(__('No Data Found')); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u474401954/domains/quantummtradeai.com/public_html/core/resources/views/theme4/user/interest_log.blade.php ENDPATH**/ ?>