<?php $__env->startSection('content2'); ?>
    

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Investment Log')); ?></h5>
                                <form action="" method="get">
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <input type="text" name="trx" class="form-control form-control-sm" placeholder="transaction id">
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" class="form-control form-control-sm" placeholder="Search User" name="date">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn main-btn btn-sm"><?php echo e(__('Search')); ?></button>
                                        </div>
                                    </div>
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
                                                <th><?php echo e(__('Details')); ?></th>
                                                <th><?php echo e(__('Payment Date')); ?></th>
                                            </tr>
                                        </thead>
                
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td data-caption="<?php echo e(__('Trx')); ?>"><?php echo e($transaction->trx); ?></td>
                                                    <td data-caption="<?php echo e(__('User')); ?>"><?php echo e(@$transaction->user->fname . ' ' . @$transaction->user->lname); ?></td>
                                                    <td data-caption="<?php echo e(__('Gateway')); ?>"><?php echo e(@$transaction->gateway->gateway_name ?? 'Account Transfer'); ?></td>
                                                    <td data-caption="<?php echo e(__('Amount')); ?>"><?php echo e($transaction->amount); ?></td>
                                                    <td data-caption="<?php echo e(__('Currency')); ?>"><?php echo e($transaction->currency); ?></td>
                                                    <td data-caption="<?php echo e(__('Charge')); ?>"><?php echo e($transaction->charge . ' ' . $transaction->currency); ?></td>
                                                    <td data-caption="<?php echo e(__('Details')); ?>"><?php echo e($transaction->details); ?></td>
                                                    <td data-caption="<?php echo e(__('Payment Date')); ?>"><?php echo e($transaction->created_at->format('Y-m-d')); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td class="text-center" colspan="100%">
                                                        <?php echo e(__('No Transaction Found')); ?>

                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <?php if($transactions->hasPages()): ?>
                                        <?php echo e($transactions->links()); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmc\core\resources\views/theme4/user/transaction.blade.php ENDPATH**/ ?>