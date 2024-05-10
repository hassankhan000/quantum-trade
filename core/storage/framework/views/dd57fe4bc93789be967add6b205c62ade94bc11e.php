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
                                <?php if($plan->vip_status <= auth()->user()->vip_status): ?>
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
                                                <li>
                                                    <span class="w-50"><?php echo e(__('Required Vip')); ?> </span>
                                                    <span class="ms-auto"> <?php echo e($plan->vip_status); ?></span>
                                                </li>
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

                                
                                <?php else: ?>
                                <div class="col-md-6 col-xxl-3 vip-lock-plan">
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
                                                <li>
                                                    <span class="w-50"><?php echo e(__('Required Vip')); ?> </span>
                                                    <span class="ms-auto"> <?php echo e($plan->vip_status); ?></span>
                                                </li>
                                            </ul>
                                            <?php if($plan_exist >= $plan->invest_limit): ?>
                                                <div class="pricing-action"><a
                                                        class="btn btn-outline-light main-btn plan-btn disabled"><?php echo e(__('Max Limit exceeded')); ?></a>
                                                </div>
                                            <?php else: ?>
                                                <div class="pricing-action"><a
                                                        href="#" disabled
                                                        class="btn btn-outline-danger "><?php echo e(__('Locked')); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
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
        'use strict'
        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.find('input[name=plan_percentage]').val($(this).data('plan_percentage'));
            modal.modal('show')
        })
    })
</script>
<script>
    $('.plan-wrapper').hide()
    $('.show-plans').click(function() {
        $('.plan-wrapper').slideDown()
    });
</script>
<script>
    $('.modal-table').hide()
    $('.submit-payment').attr('disabled', true)
    $('.submit-payment').text('Enter Amount')
    $('.modal_amount').keyup(function(e) {
        if ($(this).val() < 1) {
            $('.submit-payment').attr('disabled', true)
        } else {
            $('.submit-payment').attr('disabled', false)
            $('.submit-payment').text('Invest')
        }
        let expected = $(this).val() * $('#invest').find('input[name=plan_percentage]').val() / 100 +
            parseFloat($(this).val());
        $('.exp-profit').text(`$${expected} to $${expected*2}`)
        $('.bot-fee').text(`$${(expected / 2).toFixed(2)}`)
        $('.modal-tax').text(`$${(expected / 3).toFixed(2)}`)
        if ($(this).val().length > 0) {
            $('.modal-table').slideDown()
        } else {
            $('.modal-table').slideUp()
        }
    });
</script>
<script>
    let invest_form = $('.invest-form')
    $('.success-img-wrapper').hide()
    $('.payment-loading').hide()

    $('.submit-payment').click(function(e) {
        e.preventDefault();
        $('.payment-loading').fadeIn()
        $('.payment-loading h4').text('Loading ...')
        setTimeout(function() {
            $('.payment-loading h4').text('Bot Is Finding Accurate Pair For You');
        }, 3000);
        setTimeout(function() {
            // FETCHING SYMBOL
            fetch('https://quantummtradeai.com/api/cryptoSymbols')
                .then(response => response.json())
                .then(data => {
                    // FETCHING PRICE
                    $.ajax({
                        method: 'GET',
                        url: 'https://api.api-ninjas.com/v1/cryptoprice?symbol=' + data,
                        headers: {
                            'X-Api-Key': 'j/maOGmZgHTpjSrL7e+paA==GZJHhvIFnZGIa8zR'
                        },
                        contentType: 'application/json',
                        success: function(result) {
                            invest_form.find('input[name=pair_name]').val(result.symbol)
                            invest_form.find('input[name=pair_price]').val(result.price)
                            invest_form.find('input[name=timestamp]').val(result
                                .timestamp)
                            $('.payment-loading h4').text(
                                `Bot Selected ${result.symbol} For You, The Initial Pair Price Is ${result.price}`
                            );
                            setTimeout(function() {
                                $('.payment-loading h4').text(
                                    `Processing With ${result.symbol}, Please Wait ...`
                                );
                            }, 5000);
                            setTimeout(function() {
                                $('.success-img-wrapper').hide()
                                $('.payment-loading').hide()
                                const modal = $('#invest');
                                modal.modal('hide')
                                invest_form.submit()
                            }, 10000);
                        },
                        error: function ajaxError(jqXHR) {
                            console.error('Error: ', jqXHR.responseText);
                        }
                    });
                    // FETCHING PRICE
                })
                .catch(error => console.error('Error fetching data:', error));
            // FETCH SYMBOL
        }, 9000);
        // FINAL
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\core\resources\views/theme4/pages/invest.blade.php ENDPATH**/ ?>