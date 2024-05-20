<?php $__env->startSection('content2'); ?>
<script>
    'use strict'


    function firePayment(elementId) {
        $.ajax({
            url: "<?php echo e(route('returninterest')); ?>",
            method: "GET",
            success: function(response) {
                if (response) {
                    document.getElementById(elementId).innerHTML = "COMPLETE";

                    return
                }

                window.location.href = "<?php echo e(url()->current()); ?>"
            }
        })
    }




    function getCountDown(elementId, seconds) {
        var times = seconds;

        var x = setInterval(function() {
            var distance = times * 1000;

            if (distance < 0) {
                clearInterval(x);
                firePayment(elementId);
                return
            }
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById(elementId).innerHTML = days + "d " + hours + "h " + minutes + "m " +
                seconds + "s ";
            times--;
        }, 1000);
    }
</script>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Investment Log')); ?></h5>
                                <form action="" method="get" class="d-inline-flex">
                                    <input type="text" name="trx" class="form-control form-control-sm me-2"
                                        placeholder="transaction id">
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
                                            <tr>
                                                <th><?php echo e(__('Trx')); ?></th>
                                                <th><?php echo e(__('User')); ?></th>
                                                <th><?php echo e(__('Gateway')); ?></th>
                                                <th><?php echo e(__('Amount')); ?></th>
                                                <th><?php echo e(__('Currency')); ?></th>
                                                <th><?php echo e(__('Charge')); ?></th>
                                                <th><?php echo e(__('Payment Date')); ?></th>
                                                <th><?php echo e(__('Upcoming Payment')); ?></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-caption="<?php echo e(__('Trx')); ?>">
                                                        <?php echo e($transaction->transaction_id); ?></td>
                                                    <td data-caption="<?php echo e(__('User')); ?>">
                                                        <?php echo e(@$transaction->user->fname . ' ' . @$transaction->user->lname); ?>

                                                    </td>
                                                    <td data-caption="<?php echo e(__('Gateway')); ?>">
                                                        <?php if($transaction->gateway_id == 0): ?>
                                                            <?php echo e(__('Invest Using Balance')); ?>

                                                        <?php else: ?>
                                                            <?php echo e(@$transaction->gateway->gateway_name ?? 'Account Transfer'); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td data-caption="<?php echo e(__('Amount')); ?>"><?php echo e($transaction->amount); ?></td>
                                                    <td data-caption="<?php echo e(__('Currency')); ?>">
                                                        <?php if($transaction->gateway_id == 0): ?>
                                                            <?php echo e($general->site_currency); ?>

                                                        <?php else: ?>
                                                            <?php echo e($transaction->gateway->gateway_parameters->gateway_currency); ?>

                                                        <?php endif; ?>

                                                    </td>
                                                    <td data-caption="<?php echo e(__('Charge')); ?>">
                                                        <?php echo e($transaction->charge . ' ' . $transaction->currency); ?></td>

                                                    <td data-caption="<?php echo e(__('Payment Date')); ?>">
                                                        <?php echo e($transaction->created_at->format('Y-m-d')); ?>

                                                    </td>
                                                    <td data-caption="<?php echo e(__('Upcoming Payment')); ?>">
                                                        <p id="count_<?php echo e($loop->iteration); ?>" class="mb-2">
                                                            <?php if($transaction->next_payment_date == null): ?>
                                                                <?php echo e(__('Complete')); ?>

                                                            <?php endif; ?>
                                                        </p>
                                                        <script>
                                                            <?php if($transaction->next_payment_date != null): ?>
                                                                getCountDown("count_<?php echo e($loop->iteration); ?>",
                                                                    "<?php echo e(now()->gt($transaction->next_payment_date) ? 0 : now()->diffInSeconds($transaction->next_payment_date)); ?>"
                                                                )
                                                            <?php endif; ?>
                                                        </script>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td class="text-center" colspan="100%">
                                                        <?php echo e(__('No Invest Found')); ?>

                                                    </td>
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


<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum\core\resources\views/theme4/user/invest_log.blade.php ENDPATH**/ ?>
