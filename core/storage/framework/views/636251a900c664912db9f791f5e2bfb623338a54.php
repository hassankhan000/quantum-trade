<style>
    .nk-content.nk-content-fluid {
        padding-top: 0;
    }

    .nk-content.nk-content-fluid {
        background: #282828 !important;
    }

    .main-card {
        width: 100%;
        height: 100%;
        padding: 20px 20px 1px 20px;
        border-radius: 20px;
        background: rgb(58, 140, 36);
        /* background: linear-gradient(49deg, rgba(58, 140, 36, 1) 50%, rgba(148, 208, 26, 1) 100%); */
        background:
            linear-gradient(90deg, rgb(59 140 36 / 58%) 50%, rgb(147 208 26 / 0%) 100%), url(https://img.freepik.com/free-vector/gradient-wavy-background_23-2149123391.jpg?uid=R75560207&ga=GA1.1.168232131.1695012003&semt=ais);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
    }

    .modal_amount {
        padding: 0 10px !important;
        border: 1px solid #549653 !important;
        width: -webkit-fill-available !important;
        height: auto !important;
        background: #f0f8ff00 !important;
        border-radius: 10px !important;
        margin: 15px 0 0 0 !important;
        font-size: 10px !important;
    }

    .main-card h5 {
        margin-top: 0;
        color: white;
        font-size: 23px;
        font-family: system-ui;
        font-weight: 500;
        width: max-content;
    }

    .main-card h6 {
        margin: 0;
        color: #fff6f6;
        font-size: 12px;
        margin-bottom: 5px;
    }

    .main-card h4 {
        margin: 0;
        color: #aefd23;
        font-size: 22px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .main-card .bell {
        padding: 0px 0px 5px 5px;
        background: #282828;
        position: absolute;
        top: 0;
        right: 0;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 10px;
    }

    .main-card .bell .inner {
        padding: 10px;
        background: #83c31c;
        border-radius: 10px;
    }

    .card {
        background-color: #232323 !important;
        border-radius: 12px !important;
        border: 1px solid #83c31c75 !important;
    }

    .card-amount .amount {
        color: #aefd23 !important;
    }

    .card-amount .amount span {
        color: #ffffff !important;
    }

    .plan-card {
        background: #232323;
        border-radius: 16px;
        padding: 14px;
        margin: 20px 0 30px 0;
        border: 1px solid #7cf94545;
        position: relative;
        background: linear-gradient(#23232300, #23232375), url('https://img.freepik.com/free-vector/abstract-black-shapes-background-design_1017-31904.jpg?t=st=1714650201~exp=1714653801~hmac=0ee725b2266ddda8e091f01c15333da69082853a6a60209cd197b857deb57035&w=740');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .plan-card h4 {
        margin: 0px 0 6px 0;
        color: #7cf945;
        font-weight: 600;
        font-size: 14px;
    }

    .plan-card p {
        color: hsl(0, 0%, 94%);
        font-size: 9px;
        margin-bottom: 6px;
    }

    .plan-card .plan-status {
        background: #fab913;
        color: hsl(128.89deg 55.09% 19.9%);
        position: absolute;
        top: -11px;
        padding: 3px 6px;
        right: 0;
        border-radius: 7px;
        font-size: 12px;
        font-weight: 700;
    }

    button.balance {
        padding: 7px 40px;
        border-radius: 6px;
        margin-top: 3px;
        border: 0;
        width: 100%;
        font-size: 12px;
        font-weight: 500;
        background: #77ec43;
        color: black;
    }

    .plan-rio {
        display: flex;
        align-items: center;
        font-size: 10px;
        padding: 3px;
        background: #fffdda;
        margin: 5px 0px;
        border-radius: 7px;
        width: max-content;
        color: black;
    }

    .plan-rio .plan-amount,
    .plan-rio h6 {
        font-size: 12px;
        font-weight: 600;
        margin: 0;
        padding: 0;
    }

    .plan-rio .plan-amount {
        color: #23742f;
        margin-left: 8px;
    }

    .plan-card h4 span {
        color: #fffdfd;
        text-transform: capitalize;
    }

    .plan-list {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    .plan-list li {
        list-style-type: none;
        background: #23742f;
        margin: 0 5px 5px 0;
        color: white;
        padding: 4px;
        font-size: 9px;
        border-radius: 7px;
    }

    .vip-badge {
        font-size: 10px;
        color: yellow;
        font-weight: 600;
        padding: 1px 6px;
        background: #282828;
        white-space: nowrap;
        border-radius: 8px;
        position: relative;
        top: -2px;
    }

    .nolock {
        display: none;
    }

    .locked {
        display: flex;
        align-items: center;
        justify-content: center;
        height: -webkit-fill-available;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        backdrop-filter: blur(3px);
    }

    .locked img {
        width: 50%;
    }

    .modal-table th,
    .modal-table td {
        font-size: 10px;
    }

    .modal-table-p {
        font-size: 7px;
        color: #919191;
        margin: 11px 4px 0px 4px;
    }

    .payment-loading {
        width: 100%;
        height: 100vh;
        overflow: auto;
        flex-direction: column;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        background: black;
        top: 0;
        left: 0;
        z-index: 9999;
    }

    .payment-loading img {
        color: black;
        margin-top: -125px;
    }

    .payment-loading h4 {
        color: #aefd23;
        margin-top: -90px;
        font-weight: 600;
        font-size: 12px;
    }
    .success-img-wrapper{
        width: 100%;
        height: 100vh;
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        background: #f8f9ff;
        display: flex;
        align-items: center;
        justify-content: center;
        display: none;
    }
</style>
<?php $__env->startSection('content2'); ?>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="row g-gs pt-5">
                            <div class="col-md-4">
                                <div class="main-card">
                                    <div class="bell">
                                        
                                        <img src="https://cdn.dribbble.com/users/37530/screenshots/2937858/drib_blink_bot.gif"
                                            width="100px" class="img-fluid rounded rounded-4" alt="">
                                    </div>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-6">
                                            <h6>Welcome back:)</h6>
                                            <h5>Huzaifa Khan <span class="vip-badge">VIP
                                                    <?php echo e(auth()->user()->vip_status); ?></span> </h5>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>
                                    <div class="row mt-5 align-items-end justify-content-center">
                                        <div class="col-6">
                                            <h6 class="fs-4">Balance</h6>
                                            <h4>10,00,00,00,99</h4>
                                            <h6 class="fs-6 mt-4">(0,000,00,99,99 BTC)</h6>
                                        </div>
                                        <div class="col-6 d-flex flex-column align-items-end justify-content-end">
                                            <h6 class="fs-6 mb-0 text-end d-flex align-items-center text-dark mt-4">
                                                <?php if(1 == 0): ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="red" class="me-2 bi bi-arrow-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                                    </svg>
                                                <?php else: ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="me-2 bi bi-arrow-up-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                                    </svg>
                                                <?php endif; ?>
                                                36.90%
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row mt-3 align-items-center justify-content-center">
                                        <div class="col">
                                            <button class="btn btn-dark show-plans w-100">Start Bot</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-light w-100" disabled>End Bot</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 plan-wrapper">
                                <span class="text-white fw-bold d-flex align-items-center">CHOOSE WORLD'S BEST QUANTUM
                                    TRADING BOTS
                                    <img style="margin: -8px 0px 0 -2px !important;
                                width: 30px;"
                                        src="https://media0.giphy.com/avatars/HeyAutoHQ/DgfrJNR8oUyv.gif"
                                        class="img-fluid rounded rounded-circle ms-2" alt="">
                                </span>
                                <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php
                                        $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                                            ->where('user_id', Auth::id())
                                            ->where('next_payment_date', '!=', null)
                                            ->where('payment_status', 1)
                                            ->count();
                                    ?>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="plan-card">
                                            <div class="<?php if($plan->vip_status <= auth()->user()->vip_status): ?> nolock <?php else: ?> locked <?php endif; ?>">
                                                <img class="img-fluid"
                                                    src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/lock.png')); ?>"alt="">
                                            </div>
                                            <h4>Welcome To <span><?php echo e($plan->plan_name); ?></span> Quantum Trading Bot
                                            </h4>
                                            <p class="">Trade With World's Best Quantum Trading Bots</p>
                                            <span class="plan-status"><?php echo e(__('Required VIP')); ?>

                                                <?php echo e($plan->vip_status); ?>

                                            </span>
                                            <ul class="plan-list">
                                                <?php if($plan->amount_type == 0): ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('Minimum')); ?> </span>
                                                        <span class="details">
                                                            <?php echo e(number_format($plan->minimum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('Maximum')); ?> </span>
                                                        <span class="details">
                                                            <?php echo e(number_format($plan->maximum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('Amount')); ?> </span>
                                                        <span class="details">
                                                            <?php echo e(number_format($plan->amount, 2) . ' ' . @$general->site_currency); ?></span>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if($plan->return_for == 1): ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('For')); ?> </span>
                                                        <span class="details"> <?php echo e($plan->how_many_time); ?>

                                                            <?php echo e(__('Times')); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('For')); ?> </span>
                                                        <span class="details"> <?php echo e(__('Lifetime')); ?></span>
                                                    </li>
                                                <?php endif; ?>
                                                <li>
                                                    <span class="caption"><?php echo e(__('EVERY')); ?> </span>
                                                    <span class="details"><?php echo e($plan->time->name); ?></span>
                                                </li>

                                                <?php if($plan->capital_back == 1): ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('Capital Back')); ?> </span>
                                                        <span class="details"> <?php echo e(__('YES')); ?></span>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <span class="caption"><?php echo e(__('Capital Back')); ?> </span>
                                                        <span class="details"> <?php echo e(__('NO')); ?></span>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>

                                            <div class="plan-rio">
                                                <h6><?php echo e(__('ROI')); ?></h6>
                                                <h6 class="plan-amount">
                                                    <?php echo e(number_format($plan->return_interest, 2)); ?> <?php if($plan->interest_status == 'percentage'): ?>
                                                        <?php echo e('%'); ?>

                                                    <?php else: ?>
                                                        <?php echo e(@$general->site_currency); ?>

                                                    <?php endif; ?>
                                                </h6>
                                            </div>

                                            <?php if($plan_exist >= $plan->invest_limit): ?>
                                                <a class="main-btn plan-btn w-100 disabled" href="#">
                                                    <span><?php echo e(__('Max Limit exceeded')); ?></span>
                                                </a>
                                            <?php else: ?>
                                                
                                                <?php if(auth()->guard()->check()): ?>
                                                    <?php if($plan->vip_status <= auth()->user()->vip_status): ?>
                                                        <button class="balance btn-light" data-plan="<?php echo e($plan); ?>"
                                                            data-plan_percentage="<?php echo e(number_format($plan->return_interest, 2)); ?>"
                                                            data-url=""><span><?php echo e(__('Invest')); ?></span></button>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Account balance</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format(auth()->user()->balance, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Total Withdraw')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($withdraw, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <ul id="cryptoSelect">
                                            <li>INITIAL</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Total Deposit')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($totalDeposit, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Total Invest')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($totalInvest, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Current Invest')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Current Plan')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(isset($currentPlan->plan->plan_name) ? $currentPlan->plan->plan_name : 'N/A'); ?>

                                                <span class="currency currency-usd"></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Pending Invest')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($pendingInvest, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Pending Withdraw')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($pendingWithdraw, 2) . ' ' . $general->site_currency); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><?php echo e(__('Refferal Earn')); ?></h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                <?php echo e(number_format($commison, 2)); ?>

                                                <span class="currency currency-usd">
                                                    <?php echo e($general->site_currency); ?></span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label><?php echo e(__('Your refferal link')); ?></label>
                                <div class="input-group mb-3">
                                    <input type="text" id="refer-link" class="form-control copy-text"
                                        value="<?php echo e(route('user.register', @Auth::user()->username)); ?>"
                                        placeholder="referallink.com/refer" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2" readonly>
                                    <button type="button" class="input-group-text copy cmn-btn"
                                        id="basic-addon2"><?php echo e(__('Copy')); ?></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group mb-1">
                                            <div class="card-title">
                                                <h6 class="title">Investment Overview</h6>
                                                <p>
                                                    The investment overview of your platform.
                                                    <a href="#">All Investment</a>
                                                </p>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs nav-tabs-card nav-tabs-xs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#overview">Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#thisyear">This Year</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#alltime">All Time</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-0">
                                            <div class="tab-pane active" id="overview">
                                                <div class="invest-ov gy-2">
                                                    <div class="subtitle">
                                                        Currently Actived Investment
                                                    </div>
                                                    <div class="invest-ov-details">
                                                        <div class="invest-ov-info">
                                                            <div class="amount">
                                                                49,395.395
                                                                <span class="currency currency-usd">USD</span>
                                                            </div>
                                                            <div class="title">Amount</div>
                                                        </div>
                                                        <div class="invest-ov-stats">
                                                            <=>
                                                                <span class="amount">56</span><span
                                                                    class="change up text-danger"><em
                                                                        class="icon ni ni-arrow-long-up"></em
                                                                        ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">
                                                                            49,395.395
                                                                            <span class="currency currency-usd">USD</span>
                                                                        </div>
                                                                        <div class="title">Paid Profit</div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-ov gy-2">
                                                        <div class="subtitle">
                                                            Investment in this Month
                                                        </div>
                                                        <div class="invest-ov-details">
                                                            <div class="invest-ov-info">
                                                                <div class="amount">
                                                                    49,395.395
                                                                    <span class="currency currency-usd">USD</span>
                                                                </div>
                                                                <div class="title">Amount</div>
                                                            </div>
                                                            <div class="invest-ov-stats">
                                                                <=>
                                                                    <span class="amount">23</span><span
                                                                        class="change down text-danger"><em
                                                                            class="icon ni ni-arrow-long-down"></em
                                                                            ></span
=">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane"
                                                                            id="thisyear">
                                                                        <div class="invest-ov gy-2">
                                                                            <div class="subtitle">
                                                                                Currently Actived Investment
                                                                            </div>
                                                                            <div class="invest-ov-details">
                                                                                <div class="invest-ov-info">
                                                                                    <div class="amount">
                                                                                        89,395.395
                                                                                        <span
                                                                                            class="currency currency-usd">USD</span>
                                                                                    </div>
                                                                                    <div class="title">Amount</div>
                                                                                </div>
                                                                                <div class="invest-ov-stats">
                                                                                    <=>
                                                                                        <span class="amount">96</span><span
                                                                                            class="change up text-danger"><em
                                                                                                class="icon ni ni-arrow-long-up"></em
                                                                                                ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                                                                                            <div class="invest-ov-info">
                                                                                                <div class="amount">
                                                                                                    99,395.395
                                                                                                    <span
                                                                                                        class="currency currency-usd">USD</span>
                                                                                                </div>
                                                                                                <div class="title">Paid
                                                                                                    Profit</div>
                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="invest-ov gy-2">
                                                                                <div class="subtitle">
                                                                                    Investment in this Month
                                                                                </div>
                                                                                <div class="invest-ov-details">
                                                                                    <div class="invest-ov-info">
                                                                                        <div class="amount">
                                                                                            149,395.395
                                                                                            <span
                                                                                                class="currency currency-usd">USD</span>
                                                                                        </div>
                                                                                        <div class="title">Amount</div>
                                                                                    </div>
                                                                                    <div class="invest-ov-stats">
                                                                                        <=>
                                                                                            <span
                                                                                                class="amount">83</span><span
                                                                                                class="change down text-danger"><em
                                                                                                    class="icon ni ni-arrow-long-down"></em
                                                                                                    ></span
=">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane"
                                                                                                    id="alltime">
                                                                                                <div
                                                                                                    class="invest-ov gy-2">
                                                                                                    <div class="subtitle">
                                                                                                        Currently Actived
                                                                                                        Investment
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="invest-ov-details">
                                                                                                        <div
                                                                                                            class="invest-ov-info">
                                                                                                            <div
                                                                                                                class="amount">
                                                                                                                249,395.395
                                                                                                                <span
                                                                                                                    class="currency currency-usd">USD</span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="title">
                                                                                                                Amount</div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="invest-ov-stats">
                                                                                                            <=>
                                                                                                                <span
                                                                                                                    class="amount">556</span><span
                                                                                                                    class="change up text-danger"><em
                                                                                                                        class="icon ni ni-arrow-long-up"></em
                                                                                                                        ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                                                                                                                    <div
                                                                                                                        class="invest-ov-info">
                                                                                                                        <div
                                                                                                                            class="amount">
                                                                                                                            149,395.395
                                                                                                                            <span
                                                                                                                                class="currency currency-usd">USD</span>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="title">
                                                                                                                            Paid
                                                                                                                            Profit
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="invest-ov gy-2">
                                                                                                        <div
                                                                                                            class="subtitle">
                                                                                                            Investment in
                                                                                                            this Month
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="invest-ov-details">
                                                                                                            <div
                                                                                                                class="invest-ov-info">
                                                                                                                <div
                                                                                                                    class="amount">
                                                                                                                    249,395.395
                                                                                                                    <span
                                                                                                                        class="currency currency-usd">USD</span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="title">
                                                                                                                    Amount
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="invest-ov-stats">
                                                                                                                <=>
                                                                                                                    <span
                                                                                                                        class="amount">223</span><span
                                                                                                                        class="change down text-danger"><em
                                                                                                                            class="icon ni ni-arrow-long-down"></em
                                                                                                                            ></span
=">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6
                                                                                                                            col-xxl-4">
                                                                                                                        <div
                                                                                                                            class="card card-bordered card-full">
                                                                                                                            <div
                                                                                                                                class="card-inner d-flex flex-column h-100">
                                                                                                                                <div
                                                                                                                                    class="card-title-group mb-3">
                                                                                                                                    <div
                                                                                                                                        class="card-title">
                                                                                                                                        <h6
                                                                                                                                            class="title">
                                                                                                                                            Top
                                                                                                                                            Invested
                                                                                                                                            Plan
                                                                                                                                        </h6>
                                                                                                                                        <p>In
                                                                                                                                            last
                                                                                                                                            30
                                                                                                                                            days
                                                                                                                                            top
                                                                                                                                            invested
                                                                                                                                            schemes.
                                                                                                                                        </p>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="card-tools mt-n4 me-n1">
                                                                                                                                        <div
                                                                                                                                            class="drodown">
                                                                                                                                            <a href="#"
                                                                                                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                                                                                data-bs-toggle="dropdown"><em
                                                                                                                                                    class="icon ni ni-more-h"></em></a>
                                                                                                                                            <div
                                                                                                                                                class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                                                                                                <ul
                                                                                                                                                    class="link-list-opt no-bdr">
                                                                                                                                                    <li>
                                                                                                                                                        <a
                                                                                                                                                            href="#"><span>15
                                                                                                                                                                Days</span></a>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <a href="#"
                                                                                                                                                            class="active"><span>30
                                                                                                                                                                Days</span></a>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <a
                                                                                                                                                            href="#"><span>3
                                                                                                                                                                Months</span></a>
                                                                                                                                                    </li>
                                                                                                                                                </ul>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="progress-list gy-3">
                                                                                                                                    <div
                                                                                                                                        class="progress-wrap">
                                                                                                                                        <div
                                                                                                                                            class="progress-text">
                                                                                                                                            <div
                                                                                                                                                class="progress-label">
                                                                                                                                                Strater
                                                                                                                                                Plan
                                                                                                                                            </div>
                                                                                                                                            <div
                                                                                                                                                class="progress-amount">
                                                                                                                                                58%
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div
                                                                                                                                            class="progress progress-md">
                                                                                                                                            <div class="progress-bar"
                                                                                                                                                data-progress="58">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="progress-wrap">
                                                                                                                                        <div
                                                                                                                                            class="progress-text">
                                                                                                                                            <div
                                                                                                                                                class="progress-label">
                                                                                                                                                Silver
                                                                                                                                                Plan
                                                                                                                                            </div>
                                                                                                                                            <div
                                                                                                                                                class="progress-amount">
                                                                                                                                                18.49%
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div
                                                                                                                                            class="progress progress-md">
                                                                                                                                            <div class="progress-bar bg-orange"
                                                                                                                                                data-progress="18.49">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="progress-wrap">
                                                                                                                                        <div
                                                                                                                                            class="progress-text">
                                                                                                                                            <div
                                                                                                                                                class="progress-label">
                                                                                                                                                Dimond
                                                                                                                                                Plan
                                                                                                                                            </div>
                                                                                                                                            <div
                                                                                                                                                class="progress-amount">
                                                                                                                                                16%
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div
                                                                                                                                            class="progress progress-md">
                                                                                                                                            <div class="progress-bar bg-teal"
                                                                                                                                                data-progress="16">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="progress-wrap">
                                                                                                                                        <div
                                                                                                                                            class="progress-text">
                                                                                                                                            <div
                                                                                                                                                class="progress-label">
                                                                                                                                                Platinam
                                                                                                                                                Plan
                                                                                                                                            </div>
                                                                                                                                            <div
                                                                                                                                                class="progress-amount">
                                                                                                                                                29%
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div
                                                                                                                                            class="progress progress-md">
                                                                                                                                            <div class="progress-bar bg-pink"
                                                                                                                                                data-progress="29">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="progress-wrap">
                                                                                                                                        <div
                                                                                                                                            class="progress-text">
                                                                                                                                            <div
                                                                                                                                                class="progress-label">
                                                                                                                                                Vibranium
                                                                                                                                                Plan
                                                                                                                                            </div>
                                                                                                                                            <div
                                                                                                                                                class="progress-amount">
                                                                                                                                                33%
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div
                                                                                                                                            class="progress progress-md">
                                                                                                                                            <div class="progress-bar bg-azure"
                                                                                                                                                data-progress="33">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="invest-top-ck mt-auto">
                                                                                                                                    <canvas
                                                                                                                                        class="iv-plan-purchase"
                                                                                                                                        id="planPurchase"></canvas>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-6 col-xxl-4">
                                                                                                                <div
                                                                                                                    class="card card-bordered card-full">
                                                                                                                    <div
                                                                                                                        class="card-inner border-bottom">
                                                                                                                        <div
                                                                                                                            class="card-title-group">
                                                                                                                            <div
                                                                                                                                class="card-title">
                                                                                                                                <h6
                                                                                                                                    class="title">
                                                                                                                                    Recent
                                                                                                                                    Activities
                                                                                                                                </h6>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="card-tools">
                                                                                                                                <ul
                                                                                                                                    class="card-tools-nav">
                                                                                                                                    <li>
                                                                                                                                        <a
                                                                                                                                            href="#"><span>Cancel</span></a>
                                                                                                                                    </li>
                                                                                                                                    <li
                                                                                                                                        class="active">
                                                                                                                                        <a
                                                                                                                                            href="#"><span>All</span></a>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <ul
                                                                                                                        class="nk-activity">
                                                                                                                        <li
                                                                                                                            class="nk-activity-item">
                                                                                                                            <div
                                                                                                                                class="nk-activity-media user-avatar bg-success">
                                                                                                                                <img src="images/avatar/c-sm.jpg"
                                                                                                                                    alt="" />
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-activity-data">
                                                                                                                                <div
                                                                                                                                    class="label">
                                                                                                                                    Keith
                                                                                                                                    Jensen
                                                                                                                                    requested
                                                                                                                                    to
                                                                                                                                    Widthdrawl.
                                                                                                                                </div>
                                                                                                                                <span
                                                                                                                                    class="time">2
                                                                                                                                    hours
                                                                                                                                    ago</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li
                                                                                                                            class="nk-activity-item">
                                                                                                                            <div
                                                                                                                                class="nk-activity-media user-avatar bg-warning">
                                                                                                                                HS
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-activity-data">
                                                                                                                                <div
                                                                                                                                    class="label">
                                                                                                                                    Harry
                                                                                                                                    Simpson
                                                                                                                                    placed
                                                                                                                                    a
                                                                                                                                    Order.
                                                                                                                                </div>
                                                                                                                                <span
                                                                                                                                    class="time">2
                                                                                                                                    hours
                                                                                                                                    ago</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li
                                                                                                                            class="nk-activity-item">
                                                                                                                            <div
                                                                                                                                class="nk-activity-media user-avatar bg-azure">
                                                                                                                                SM
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-activity-data">
                                                                                                                                <div
                                                                                                                                    class="label">
                                                                                                                                    Stephanie
                                                                                                                                    Marshall
                                                                                                                                    got
                                                                                                                                    a
                                                                                                                                    huge
                                                                                                                                    bonus.
                                                                                                                                </div>
                                                                                                                                <span
                                                                                                                                    class="time">2
                                                                                                                                    hours
                                                                                                                                    ago</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li
                                                                                                                            class="nk-activity-item">
                                                                                                                            <div
                                                                                                                                class="nk-activity-media user-avatar bg-purple">
                                                                                                                                <img src="images/avatar/d-sm.jpg"
                                                                                                                                    alt="" />
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-activity-data">
                                                                                                                                <div
                                                                                                                                    class="label">
                                                                                                                                    Nicholas
                                                                                                                                    Carr
                                                                                                                                    deposited
                                                                                                                                    funds.
                                                                                                                                </div>
                                                                                                                                <span
                                                                                                                                    class="time">2
                                                                                                                                    hours
                                                                                                                                    ago</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li
                                                                                                                            class="nk-activity-item">
                                                                                                                            <div
                                                                                                                                class="nk-activity-media user-avatar bg-pink">
                                                                                                                                TM
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-activity-data">
                                                                                                                                <div
                                                                                                                                    class="label">
                                                                                                                                    Timothy
                                                                                                                                    Moreno
                                                                                                                                    placed
                                                                                                                                    a
                                                                                                                                    Order.
                                                                                                                                </div>
                                                                                                                                <span
                                                                                                                                    class="time">2
                                                                                                                                    hours
                                                                                                                                    ago</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-6 col-xxl-4">
                                                                                                                <div
                                                                                                                    class="card card-bordered h-100">
                                                                                                                    <div
                                                                                                                        class="card-inner border-bottom">
                                                                                                                        <div
                                                                                                                            class="card-title-group">
                                                                                                                            <div
                                                                                                                                class="card-title">
                                                                                                                                <h6
                                                                                                                                    class="title">
                                                                                                                                    Notifications
                                                                                                                                </h6>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="card-tools">
                                                                                                                                <a href="#"
                                                                                                                                    class="link">View
                                                                                                                                    All</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="card-inner">
                                                                                                                        <div
                                                                                                                            class="timeline">
                                                                                                                            <h6
                                                                                                                                class="timeline-head">
                                                                                                                                November,
                                                                                                                                2019
                                                                                                                            </h6>
                                                                                                                            <ul
                                                                                                                                class="timeline-list">
                                                                                                                                <li
                                                                                                                                    class="timeline-item">
                                                                                                                                    <div
                                                                                                                                        class="timeline-status bg-primary is-outline">
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-date">
                                                                                                                                        13
                                                                                                                                        Nov
                                                                                                                                        <em
                                                                                                                                            class="icon ni ni-alarm-alt"></em>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-data">
                                                                                                                                        <h6
                                                                                                                                            class="timeline-title">
                                                                                                                                            Submited
                                                                                                                                            KYC
                                                                                                                                            Application
                                                                                                                                        </h6>
                                                                                                                                        <div
                                                                                                                                            class="timeline-des">
                                                                                                                                            <p>Re-submitted
                                                                                                                                                KYC
                                                                                                                                                form.
                                                                                                                                            </p>
                                                                                                                                            <span
                                                                                                                                                class="time">09:30am</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li
                                                                                                                                    class="timeline-item">
                                                                                                                                    <div
                                                                                                                                        class="timeline-status bg-primary">
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-date">
                                                                                                                                        13
                                                                                                                                        Nov
                                                                                                                                        <em
                                                                                                                                            class="icon ni ni-alarm-alt"></em>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-data">
                                                                                                                                        <h6
                                                                                                                                            class="timeline-title">
                                                                                                                                            Submited
                                                                                                                                            KYC
                                                                                                                                            Application
                                                                                                                                        </h6>
                                                                                                                                        <div
                                                                                                                                            class="timeline-des">
                                                                                                                                            <p>Re-submitted
                                                                                                                                                KYC
                                                                                                                                                form.
                                                                                                                                            </p>
                                                                                                                                            <span
                                                                                                                                                class="time">09:30am</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                                <li
                                                                                                                                    class="timeline-item">
                                                                                                                                    <div
                                                                                                                                        class="timeline-status bg-pink">
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-date">
                                                                                                                                        13
                                                                                                                                        Nov
                                                                                                                                        <em
                                                                                                                                            class="icon ni ni-alarm-alt"></em>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="timeline-data">
                                                                                                                                        <h6
                                                                                                                                            class="timeline-title">
                                                                                                                                            Submited
                                                                                                                                            KYC
                                                                                                                                            Application
                                                                                                                                        </h6>
                                                                                                                                        <div
                                                                                                                                            class="timeline-des">
                                                                                                                                            <p>Re-submitted
                                                                                                                                                KYC
                                                                                                                                                form.
                                                                                                                                            </p>
                                                                                                                                            <span
                                                                                                                                                class="time">09:30am</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-xl-12 col-xxl-8">
                                                                                                                <div
                                                                                                                    class="card card-bordered card-full">
                                                                                                                    <div
                                                                                                                        class="card-inner border-bottom">
                                                                                                                        <div
                                                                                                                            class="card-title-group">
                                                                                                                            <div
                                                                                                                                class="card-title">
                                                                                                                                <h6
                                                                                                                                    class="title">
                                                                                                                                    Recent
                                                                                                                                    Investment
                                                                                                                                </h6>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="card-tools">
                                                                                                                                <a href="#"
                                                                                                                                    class="link">View
                                                                                                                                    All</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="nk-tb-list">
                                                                                                                        <div
                                                                                                                            class="nk-tb-item nk-tb-head">
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span>Plan</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span>Who</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-lg">
                                                                                                                                <span>Date</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span>Amount</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span>&nbsp;</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span>&nbsp;</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="nk-tb-item">
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <div
                                                                                                                                    class="align-center">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-sm bg-light">
                                                                                                                                        <span>P2</span>
                                                                                                                                    </div>
                                                                                                                                    <span
                                                                                                                                        class="tb-sub ms-2">Dimond
                                                                                                                                        <span
                                                                                                                                            class="d-none d-md-inline">-
                                                                                                                                            Daily
                                                                                                                                            8.52%
                                                                                                                                            for
                                                                                                                                            14
                                                                                                                                            Days</span></span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <div
                                                                                                                                    class="user-card">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-xs bg-azure-dim">
                                                                                                                                        <span>VA</span>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="user-name">
                                                                                                                                        <span
                                                                                                                                            class="tb-lead">Victoria
                                                                                                                                            Aguilar</span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-lg">
                                                                                                                                <span
                                                                                                                                    class="tb-sub">18/10/2019</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span
                                                                                                                                    class="tb-sub tb-amount">1.094780
                                                                                                                                    <span>BTC</span></span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span
                                                                                                                                    class="tb-sub text-success">Completed</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col nk-tb-col-action">
                                                                                                                                <div
                                                                                                                                    class="dropdown">
                                                                                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                                                                        data-bs-toggle="dropdown"><em
                                                                                                                                            class="icon ni ni-chevron-right"></em></a>
                                                                                                                                    <div
                                                                                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                                                                        <ul
                                                                                                                                            class="link-list-plain">
                                                                                                                                            <li><a
                                                                                                                                                    href="#">View</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Invoice</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Print</a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="nk-tb-item">
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <div
                                                                                                                                    class="align-center">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-sm bg-light">
                                                                                                                                        <span>P3</span>
                                                                                                                                    </div>
                                                                                                                                    <span
                                                                                                                                        class="tb-sub ms-2">Platinam
                                                                                                                                        <span
                                                                                                                                            class="d-none d-md-inline">-
                                                                                                                                            Daily
                                                                                                                                            14.82%
                                                                                                                                            for
                                                                                                                                            7
                                                                                                                                            Days</span></span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <div
                                                                                                                                    class="user-card">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-xs bg-purple-dim">
                                                                                                                                        <span>EH</span>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="user-name">
                                                                                                                                        <span
                                                                                                                                            class="tb-lead">Emma
                                                                                                                                            Henry</span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-lg">
                                                                                                                                <span
                                                                                                                                    class="tb-sub">18/10/2019</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span
                                                                                                                                    class="tb-sub tb-amount">1.094780
                                                                                                                                    <span>BTC</span></span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span
                                                                                                                                    class="tb-sub text-success">Completed</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col nk-tb-col-action">
                                                                                                                                <div
                                                                                                                                    class="dropdown">
                                                                                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                                                                        data-bs-toggle="dropdown"><em
                                                                                                                                            class="icon ni ni-chevron-right"></em></a>
                                                                                                                                    <div
                                                                                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                                                                        <ul
                                                                                                                                            class="link-list-plain">
                                                                                                                                            <li><a
                                                                                                                                                    href="#">View</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Invoice</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Print</a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="nk-tb-item">
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <div
                                                                                                                                    class="align-center">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-sm bg-light">
                                                                                                                                        <span>P1</span>
                                                                                                                                    </div>
                                                                                                                                    <span
                                                                                                                                        class="tb-sub ms-2">Silver
                                                                                                                                        <span
                                                                                                                                            class="d-none d-md-inline">-
                                                                                                                                            Daily
                                                                                                                                            4.76%
                                                                                                                                            for
                                                                                                                                            21
                                                                                                                                            Days</span></span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <div
                                                                                                                                    class="user-card">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-xs bg-teal-dim">
                                                                                                                                        <span>AF</span>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="user-name">
                                                                                                                                        <span
                                                                                                                                            class="tb-lead">Alice
                                                                                                                                            Ford</span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-lg">
                                                                                                                                <span
                                                                                                                                    class="tb-sub">18/10/2019</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span
                                                                                                                                    class="tb-sub tb-amount">1.094780
                                                                                                                                    <span>BTC</span></span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span
                                                                                                                                    class="tb-sub text-success">Completed</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col nk-tb-col-action">
                                                                                                                                <div
                                                                                                                                    class="dropdown">
                                                                                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                                                                        data-bs-toggle="dropdown"><em
                                                                                                                                            class="icon ni ni-chevron-right"></em></a>
                                                                                                                                    <div
                                                                                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                                                                        <ul
                                                                                                                                            class="link-list-plain">
                                                                                                                                            <li><a
                                                                                                                                                    href="#">View</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Invoice</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Print</a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="nk-tb-item">
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <div
                                                                                                                                    class="align-center">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-sm bg-light">
                                                                                                                                        <span>P3</span>
                                                                                                                                    </div>
                                                                                                                                    <span
                                                                                                                                        class="tb-sub ms-2">Platinam
                                                                                                                                        <span
                                                                                                                                            class="d-none d-md-inline">-
                                                                                                                                            Daily
                                                                                                                                            14.82%
                                                                                                                                            for
                                                                                                                                            7
                                                                                                                                            Days</span></span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <div
                                                                                                                                    class="user-card">
                                                                                                                                    <div
                                                                                                                                        class="user-avatar user-avatar-xs bg-orange-dim">
                                                                                                                                        <span>HW</span>
                                                                                                                                    </div>
                                                                                                                                    <div
                                                                                                                                        class="user-name">
                                                                                                                                        <span
                                                                                                                                            class="tb-lead">Harold
                                                                                                                                            Walker</span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-lg">
                                                                                                                                <span
                                                                                                                                    class="tb-sub">18/10/2019</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col">
                                                                                                                                <span
                                                                                                                                    class="tb-sub tb-amount">1.094780
                                                                                                                                    <span>BTC</span></span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col tb-col-sm">
                                                                                                                                <span
                                                                                                                                    class="tb-sub text-success">Completed</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="nk-tb-col nk-tb-col-action">
                                                                                                                                <div
                                                                                                                                    class="dropdown">
                                                                                                                                    <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                                                                        data-bs-toggle="dropdown"><em
                                                                                                                                            class="icon ni ni-chevron-right"></em></a>
                                                                                                                                    <div
                                                                                                                                        class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                                                                                        <ul
                                                                                                                                            class="link-list-plain">
                                                                                                                                            <li><a
                                                                                                                                                    href="#">View</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Invoice</a>
                                                                                                                                            </li>
                                                                                                                                            <li><a
                                                                                                                                                    href="#">Print</a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
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
                                                                                </div>
                                                                            </div>
                                                                        <?php $__env->stopSection(); ?>

                                                                        <?php $__env->startPush('style'); ?>
                                                                            <style>
                                                                                .modal-backdrop.fade.show {
                                                                                    display: none;
                                                                                }

                                                                                @media (max-width: 991px) {
                                                                                    #header.header-inner-pages {
                                                                                        display: block;
                                                                                        background: transparent !important;
                                                                                        position: absolute;
                                                                                    }

                                                                                    .dashboard-body-part {
                                                                                        padding-top: 80px;
                                                                                    }
                                                                                }

                                                                                .sp-referral .single-child {
                                                                                    padding: 6px 10px;
                                                                                    border-radius: 5px;
                                                                                }

                                                                                .sp-referral .single-child+.single-child {
                                                                                    margin-top: 15px;
                                                                                }

                                                                                .sp-referral .single-child p {
                                                                                    display: flex;
                                                                                    align-items: center;
                                                                                    margin-bottom: 0;
                                                                                }

                                                                                .sp-referral .single-child p img {
                                                                                    width: 35px;
                                                                                    height: 35px;
                                                                                    border-radius: 50%;
                                                                                    object-fit: cover;
                                                                                    -o-object-fit: cover;
                                                                                }

                                                                                .sp-referral .single-child p span {
                                                                                    width: calc(100% - 35px);
                                                                                    font-size: 14px;
                                                                                    padding-left: 10px;
                                                                                }

                                                                                .sp-referral>.single-child.root-child>p img {
                                                                                    border: 2px solid #c3c3c3;
                                                                                }

                                                                                .sub-child-list {
                                                                                    position: relative;
                                                                                    padding-left: 35px;
                                                                                }

                                                                                .sub-child-list::before {
                                                                                    position: absolute;
                                                                                    content: '';
                                                                                    top: 0;
                                                                                    left: 17px;
                                                                                    width: 1px;
                                                                                    height: 100%;
                                                                                    background-color: #a1a1a1;
                                                                                }

                                                                                .sub-child-list>.single-child {
                                                                                    position: relative;
                                                                                }

                                                                                .sub-child-list>.single-child::before {
                                                                                    position: absolute;
                                                                                    content: '';
                                                                                    left: -18px;
                                                                                    top: 21px;
                                                                                    width: 30px;
                                                                                    height: 5px;
                                                                                    border-left: 1px solid #a1a1a1;
                                                                                    border-bottom: 1px solid #a1a1a1;
                                                                                    border-radius: 0 0 0 5px;
                                                                                }

                                                                                .sub-child-list>.single-child>p img {
                                                                                    border: 2px solid #c3c3c3;
                                                                                }
                                                                            </style>
                                                                        <?php $__env->stopPush(); ?>

                                                                        <div class="modal fade bg-transparent"
                                                                            id="invest" tabindex="-1"
                                                                            role="dialog"
                                                                            aria-labelledby="modelTitleId"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <form class="invest-form"
                                                                                    style="width: 100%;"
                                                                                    action="<?php echo e(route('user.investmentplan.submit')); ?>"
                                                                                    method="post">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <div class="modal-content p-3">
                                                                                        <div
                                                                                            class="d-flex align-items-baseline justify-content-between">
                                                                                            <p class="p-0 m-0">Purchase
                                                                                                Quantum Bot</p>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body p-0">
                                                                                            <div
                                                                                                class="form-group mb-1">
                                                                                                <input type="number"
                                                                                                    placeholder="Enter the amount you want to invest:"
                                                                                                    name="amount"
                                                                                                    class="form-control modal_amount">
                                                                                                <input type="hidden"
                                                                                                    name="plan_id"
                                                                                                    class="form-control">
                                                                                                <input type="hidden"
                                                                                                    name="plan_percentage"
                                                                                                    class="form-control">
                                                                                                    <input type="hidden" name="pair_price">
                                                                                                    <input type="hidden" name="pair_name">
                                                                                            </div>
                                                                                            <table
                                                                                                class="table mt-3 table-sm table-striped modal-table">
                                                                                                <thead>
                                                                                                    <th>Bot Fee</th>
                                                                                                    <th>xyz Tax</th>
                                                                                                    <th>Expected Profit
                                                                                                    </th>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <td
                                                                                                        class="bot-fee">
                                                                                                        0.00 to 0.00
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class="modal-tax">
                                                                                                        0.00</td>
                                                                                                    <td
                                                                                                        class="exp-profit">
                                                                                                        0.00 to 0.00
                                                                                                    </td>
                                                                                                </tbody>
                                                                                                <p
                                                                                                    class="modal-table-p">
                                                                                                    In initiating
                                                                                                    investment, AI bot
                                                                                                    trading shall
                                                                                                    commence for a day's
                                                                                                    duration, entailing
                                                                                                    profit accrual
                                                                                                    contingent upon the
                                                                                                    current valuation of
                                                                                                    the selected pair,
                                                                                                    with the invested
                                                                                                    capital remaining
                                                                                                    non-refundable and
                                                                                                    non-withdrawable
                                                                                                    thereafter.</p>
                                                                                            </table>
                                                                                        </div>
                                                                                        <button
                                                                                            class="btn btn-light submit-payment w-auto"><span><?php echo e(__('Invest Now')); ?></span></button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                        <div class="payment-loading">
                                                                            <img src="https://cdn.dribbble.com/userupload/10543014/file/original-4703d0ba72b72f87fa49a618a24a1f6d.gif"
                                                                                class="img-fluid" alt="">
                                                                            <h4>Loading...</h4>
                                                                        </div>
                                                                        <div class="success-img-wrapper">
                                                                            <img src="https://cdn.dribbble.com/users/5338201/screenshots/13804672/media/ce7ee9f720a36ac1a2782c79dc8f5728.gif" class="img-fluid success-img" alt="">
                                                                        </div>

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
                                                                                'use strict';

                                                                                $('.planDelete').on('click', function() {
                                                                                    const modal = $('#planDelete');

                                                                                    modal.find('form').attr('action', $(this).data('href'))

                                                                                    modal.modal('show')


                                                                                })

                                                                                var copyButton = document.querySelector('.copy');
                                                                                var copyInput = document.querySelector('.copy-text');
                                                                                copyButton.addEventListener('click', function(e) {
                                                                                    e.preventDefault();
                                                                                    var text = copyInput.select();
                                                                                    document.execCommand('copy');
                                                                                });
                                                                                copyInput.addEventListener('click', function() {
                                                                                    this.select();
                                                                                });


                                                                                $('.mobile-card-slider').slick({
                                                                                    slidesToShow: 1,
                                                                                    slidesToScroll: 1,
                                                                                    centerMode: true,
                                                                                    centerPadding: '60px',
                                                                                    arrows: false,
                                                                                    dots: false,
                                                                                    autoplay: false,
                                                                                    cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
                                                                                    speed: 1500,
                                                                                    autoplaySpeed: 1000,
                                                                                    responsive: [{
                                                                                            breakpoint: 1200,
                                                                                            settings: {
                                                                                                slidesToShow: 3
                                                                                            }
                                                                                        },
                                                                                        {
                                                                                            breakpoint: 768,
                                                                                            settings: {
                                                                                                slidesToShow: 2
                                                                                            }
                                                                                        },
                                                                                        {
                                                                                            breakpoint: 480,
                                                                                            settings: {
                                                                                                slidesToShow: 1
                                                                                            }
                                                                                        }
                                                                                    ]
                                                                                });
                                                                            </script>
                                                                            <script>
                                                                                $('.plan-wrapper').hide()
                                                                                $('.show-plans').click(function() {
                                                                                    $('.plan-wrapper').slideDown()
                                                                                });
                                                                            </script>
                                                                            <script>
                                                                                $('.modal-table').hide()
                                                                                $('.modal_amount').keyup(function(e) {
                                                                                    let expected = $(this).val() * $('#invest').find('input[name=plan_percentage]').val() / 100 + parseFloat($(this).val());
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

                                                                                invest_form.find('input[name=pair_price]').val("USDT-TRC-20")
                                                                                invest_form.find('input[name=pair_name]').val("USDT-TRC-20")
                                                                                
                                                                                $('.submit-payment').click(function(e) {
                                                                                    e.preventDefault();
                                                                                    $('.payment-loading').fadeIn()
                                                                                    $('.payment-loading h4').text('Loading ...')
                                                                                    setTimeout(function() {
                                                                                        $('.payment-loading h4').text('Bot Is Finding Accurate Pair For You');
                                                                                    }, 3000);
                                                                                    setTimeout(function() {
                                                                                        $('.payment-loading h4').text('Bot Selected USDTTRC20 For You');
                                                                                    }, 9000);
                                                                                    setTimeout(function() {
                                                                                        $('.payment-loading h4').text('We Are Investing Your Amount In USDTTRC20');
                                                                                    }, 16000);
                                                                                    setTimeout(function() {
                                                                                        $('.success-img-wrapper').show()
                                                                                        $('.success-img-wrapper').css('display','flex')
                                                                                    }, 20000);
                                                                                    setTimeout(function() {
                                                                                        $('.success-img-wrapper').hide()
                                                                                        $('.payment-loading').hide()
                                                                                        invest_form.submit()
                                                                                    }, 24000);
                                                                                })
                                                                            </script>
                                                                        <?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\core\resources\views/theme4/user/dashboard.blade.php ENDPATH**/ ?>