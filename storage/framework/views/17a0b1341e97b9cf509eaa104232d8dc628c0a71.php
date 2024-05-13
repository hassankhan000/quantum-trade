

<?php $__env->startSection('content2'); ?>
    
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="site-card">
                                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                                <h4 class="mb-0"><?php echo e(__('Transfer Money')); ?></h4>
                                                <p class="mb-0 ms-3">Current Balance :
                                                    <?php echo e(number_format(auth()->user()->balance, 2) . ' ' . $general->site_currency); ?></p>
                                            </div>
                                            <div class="card-body mt-4">
                                                <form action="" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group mb-3">
                                                        <label for=""><?php echo e(__('Receiver Email')); ?></label>
                                                        <input type="text" name="email" id="refer-link" class="form-control"
                                                            placeholder="Transfer account email" required>
                                                    </div>
                        
                                                    <div class="form-group mb-3">
                                                        <label for=""><?php echo e(__('Amount')); ?></label>
                                                        <input type="text" name="amount" id="amount" class="form-control"
                                                            placeholder="Transfer Amount" data-type="<?php echo e($general->trans_type); ?>"
                                                            data-charge="<?php echo e($general->trans_charge); ?>" required>
                        
                                                        <p id="totalAmount" class="sp_text_secondary mt-3"></p>
                                                    </div>
                        
                                                    <p class="text-center mb-3"><?php echo e(__('Transfer Charge')); ?> <?php echo e($general->trans_charge . ' ' . ($general->trans_type === 'fixed' ? $general->site_currency : '%')); ?></p>
                        
                                                    <ul class="list-group mb-4">
                                                        <li class="list-group-item d-flex flex-wrap align-items-center justify-content-between">
                                                            <span><?php echo e(__('Min Transfer Amount')); ?></span>
                                                            <span><?php echo e($general->min_amount . ' ' . $general->site_currency); ?></span>
                                                        </li>
                                                        <hr>
                                                        <li class="list-group-item d-flex flex-wrap align-items-center justify-content-between">
                                                            <span><?php echo e(__('Max Transfer Amount')); ?></span>
                                                            <span><?php echo e($general->max_amount . ' ' . $general->site_currency); ?></span>
                                                        </li>
                                                    </ul>
                        
                                                    <button type="submit" class="btn main-btn  btn-primary" id="basic-addon2"><span class=""><?php echo e(__('Transfer Money')); ?></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            let commission = 0;
            let total = 0;

            $('#amount').on('keyup', function() {

                if ($(this).val() == '') {
                    $('#totalAmount').text('')
                    return
                }

                if (/\D/g.test(this.value)) {

                    this.value = this.value.replace(/\D/g, '');

                    return
                }

                let charge = $(this).data('charge');

                if ($(this).data('type') === 'percent') {
                    commission = (parseFloat($(this).val()) * parseFloat(charge)) / 100;
                } else {
                    commission = parseFloat(charge)
                }

                total = parseFloat($(this).val()) + commission;


                $('#totalAmount').text('Total Amount with Charge - ' + total)



            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/transfer_money.blade.php ENDPATH**/ ?>