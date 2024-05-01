


<?php $__env->startSection('content2'); ?>
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                            <h5 class="mb-sm-0 mb-2"><?php echo e(__('Referral Log')); ?></h5>
                <form action="" method="get" class="d-inline-flex">
                    <input type="date" class="form-control form-control-sm me-3" placeholder="Search User" name="date">
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
                                <th scope="col"><?php echo e(__('Commison From')); ?></th>
                                <th scope="col"><?php echo e(__('Amount')); ?></th>
                                <th scope="col"><?php echo e(__('Return Details')); ?></th>
                                <th scope="col"><?php echo e(__('Commision Date')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $commison; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td data-caption="From"><?php echo e(@$item->commissionFrom->username); ?></td>
                                    <td data-caption="To"><?php echo e(number_format($item->amount, 2)); ?>

                                        <?php echo e(@$general->site_currency); ?></td>
                                    <td><?php echo e($item->purpouse); ?></td>
                                    <td data-caption="<?php echo e(__('date')); ?>"><?php echo e($item->created_at->format('y-m-d')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td data-caption="Data" class="text-center" colspan="100%"><?php echo e(__('No Data Found')); ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($commison->links('backend.partial.paginate')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template().'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\core\resources\views/theme4/user/commision_log.blade.php ENDPATH**/ ?>