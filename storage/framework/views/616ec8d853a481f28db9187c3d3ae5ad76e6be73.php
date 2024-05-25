<?php $__env->startSection('content2'); ?>
    <style>
        .small-text {
            font-size: 9px !important;
        }

        .nk-content-fluid {
            background: #232721;
        }

        .border-success {
            border-color: #aef32d !important;
        }

        td,
        th {
            font-size: 9px !important;
            padding: 10px !important;
        }

        /*Now the CSS*/

        /* .tree ul {
                                                                                padding-top: 20px;
                                                                                position: relative;

                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;
                                                                                -moz-transition: all 0.5s;
                                                                            }

                                                                            .tree li {
                                                                                float: left;
                                                                                text-align: center;
                                                                                list-style-type: none;
                                                                                position: relative;
                                                                                padding: 20px 5px 0 5px;

                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;
                                                                                -moz-transition: all 0.5s;
                                                                            }


                                                                            .tree li::before,
                                                                            .tree li::after {
                                                                                content: '';
                                                                                position: absolute;
                                                                                top: 0;
                                                                                right: 50%;
                                                                                border-top: 1px solid #aef32d;
                                                                                width: 50%;
                                                                                height: 20px;
                                                                            }

                                                                            .tree li::after {
                                                                                right: auto;
                                                                                left: 50%;
                                                                                border-left: 1px solid #aef32d;
                                                                            }

                                                                            .tree li:only-child::after,
                                                                            .tree li:only-child::before {
                                                                                display: none;
                                                                            }

                                                                            .tree li:only-child {
                                                                                padding-top: 0;
                                                                            }


                                                                            .tree li:first-child::before,
                                                                            .tree li:last-child::after {
                                                                                border: 0 none;
                                                                            }

                                                                            .tree li:last-child::before {
                                                                                border-right: 1px solid #aef32d;
                                                                                border-radius: 0 5px 0 0;
                                                                                -webkit-border-radius: 0 5px 0 0;
                                                                                -moz-border-radius: 0 5px 0 0;
                                                                            }

                                                                            .tree li:first-child::after {
                                                                                border-radius: 5px 0 0 0;
                                                                                -webkit-border-radius: 5px 0 0 0;
                                                                                -moz-border-radius: 5px 0 0 0;
                                                                            }

                                                                            .tree ul ul::before {
                                                                                content: '';
                                                                                position: absolute;
                                                                                top: 0;
                                                                                left: 50%;
                                                                                border-left: 1px solid #aef32d;
                                                                                width: 0;
                                                                                height: 20px;
                                                                            }

                                                                            .tree li a {
                                                                                border: 1px solid #aef32d;
                                                                                padding: 5px 10px;
                                                                                text-decoration: none;
                                                                                color: #666;
                                                                                font-family: arial, verdana, tahoma;
                                                                                font-size: 11px;
                                                                                display: inline-block;

                                                                                border-radius: 5px;
                                                                                -webkit-border-radius: 5px;
                                                                                -moz-border-radius: 5px;

                                                                                transition: all 0.5s;
                                                                                -webkit-transition: all 0.5s;
                                                                                -moz-transition: all 0.5s;
                                                                            }


                                                                            .tree li a:hover,
                                                                            .tree li a:hover+ul li a {
                                                                                background: #c8e4f8;
                                                                                color: #000;
                                                                                border: 1px solid #94a0b4;
                                                                            }

                                                                            .tree li a:hover+ul li::after,
                                                                            .tree li a:hover+ul li::before,
                                                                            .tree li a:hover+ul::before,
                                                                            .tree li a:hover+ul ul::before {
                                                                                border-color: #94a0b4;
                                                                            } /*

                                                                            /*Thats all. I hope you enjoyed it.
                                                                                                                                            Thanks :)*/
    </style>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="col-md-6 col-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Deposit:
                                            <?php echo e(round($TotalTeamDeposit, 2)); ?></h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Deposit:
                                            <?php echo e(round($totalTodayDeposit, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month Deposit:
                                            <?php echo e(round($totalThisMonthDeposit, 2)); ?></p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Members:
                                            <?php echo e($TotalTeamMembers); ?></h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Total Active: <?php echo e($TotalTeamMembers); ?></p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Active: <?php echo e($totalTodayUsers); ?></p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month: <?php echo e($totalThisMonthUsers); ?></p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Commision:
                                            <?php echo e(round($totalTeamCom, 2)); ?></h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Commission:
                                            <?php echo e(round($totalTodayCommission, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month Commission:
                                            <?php echo e(round($totalmonthCommission, 2)); ?></p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 1 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            <?php echo e(round($SumLvlOneDepositAmnt->total_amount, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: <?php echo e(count($LvlOneUsers)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            <?php echo e(round($SumLvlOneComAmnt->total_com, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission:
                                            <?php echo e(round($levelOneTodayComAmnt->total_com, 2)); ?></p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 2 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            <?php echo e(round($SumLvlTwoDepositAmnt->total_amount, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: <?php echo e(count($LvlTwoUsers)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            <?php echo e(round($SumLvlTwoComAmnt->total_com, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission:
                                            <?php echo e(round($levelTwoTodayComAmnt->total_com, 2)); ?></p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 3 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            <?php echo e(round($SumLvlThreeDepositAmnt->total_amount, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: <?php echo e(count($LvlThreeUsers)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            <?php echo e(round($SumLvlThreeComAmnt->total_com, 2)); ?></p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission:
                                            <?php echo e(round($levelThreeTodayComAmnt->total_com, 2)); ?></p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label><?php echo e(__('Your refferal link')); ?></label>
                                    <div class="input-group mb-3 d-flex align-items-center">
                                        <input type="text" id="refer-link"
                                            style="
                                            font-size: 9px;
                                            height: auto;
                                            width: auto;
                                            padding: 0px 5px;
                                            margin: 0;
                                            border: 1px solid #aef32d;"
                                            class="form-control text-success bg-dark copy-text"
                                            value="<?php echo e(route('user.register', @Auth::user()->username)); ?>"
                                            placeholder="referallink.com/refer" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" readonly>
                                        <button type="button" class="input-group-text copy cmn-btn"
                                            id="basic-addon2"><?php echo e(__('Copy')); ?></button>
                                    </div>
                                    <div class="w-100">
                                        <h6 class="text-white" style="font-size: 11px;">Username: <span
                                                class="text-success"><?php echo e(@Auth::user()->username); ?></span>
                                        </h6>
                                    </div>
                                    <div class="bg-dark rounded p-3 mt-3">
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">In (V0) you're able to invest
                                            upto 250$ estimated profit daily 1.8%~ 2.3%.
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V1 you have to
                                            achieve 30 members and 10 members must be on level 1 with the minimum deposit of
                                            100$ V1 Completion Reward is 75$ And Overall Deposit Must be 3000$ to Receive
                                            The Reward. and you're able to invest upto 1000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V2 you have to
                                            Complete 80 Members and 30 members must be on level one 1 with Minimum Deposit
                                            of 100$ V2 Completion Reward is 150$ and Overall Deposit Must be 8000$ to
                                            Receive the reward amount and you're able to invest 2000$</p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V3 you have to
                                            Complete 150 Members and 60 members must be on level one 1 with Minimum Deposit
                                            of 100$ V3 Completion Reward is 300$ and Overall Deposit Must be 15000$ to
                                            Receive the reward amount and you're able to invest 5000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V3 you have to
                                            To Achieve V4 you have to Complete 250 Members and 100 members must be on level
                                            one 1 with Minimum Deposit of 100$ V3 Completion Reward is 500$ and Overall
                                            Deposit Must be 25000$ to Receive the reward amount and you're able to invest
                                            8000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V5 you have to
                                            Complete 350 Members and 150 members must be on level one 1 with Minimum Deposit
                                            of 100$ V3 Completion Reward is 700$ and Overall Deposit Must be 35000$ to
                                            Receive the reward amount and you're able to invest 15000$
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $reference = auth()->user()->refferals;

                            ?>
                            <?php
                                $reference = auth()->user()->refferals;
                            ?>

                            <?php if($reference->count() > 0): ?>
                                

                                
                                
                                <div class="row pe-3">
                                    <div class="col-12" style="overflow: auto !important;">
                                        <h5 class="my-3 text-light fw-bold"><?php echo e(__('Your Level 1 Team')); ?></h5>
                                        <table>
                                            <tr class="bg-success text-dark border-0 border-bottom border-success">
                                                <th class="bg-success text-dark border-0 border-bottom border-success">User
                                                    Id</th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Username
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">Email
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">Phone
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Investment
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Uplainer
                                                </th>
                                            </tr>
                                            <?php $__currentLoopData = $reference; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="bg-black text-light border-0 border-bottom border-success">
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        #<?php echo e($user->id); ?>

                                                    </td>
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        <?php echo e($user->full_name); ?>

                                                    </td>
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        <?php echo e($user->email); ?>

                                                    </td>
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        <?php echo e($user->phone); ?>

                                                    </td>
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        <?php echo e(currentPlan($user)); ?>

                                                    </td>
                                                    <td class="bg-black text-light border-0 border-bottom border-success">
                                                        <?php
                                                            $referrer = DB::table('users')
                                                                ->where('id', $user->reffered_by)
                                                                ->select('fname', 'lname')
                                                                ->first();
                                                                echo $referrer->fname . ' ' . $referrer->lname; 
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                    <div class="col-12" style="overflow: auto !important;">
                                        <h5 class="my-3 text-light fw-bold"><?php echo e(__('Your Level 2 Team')); ?></h5>
                                        <table>
                                            <tr class="bg-success text-dark border-0 border-bottom border-success">
                                                <th class="bg-success text-dark border-0 border-bottom border-success">User
                                                    Id
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Username
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Email</th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Phone</th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Investment
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Uplainer
                                                </th>
                                            </tr>
                                            <?php $__currentLoopData = $reference; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $user->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="bg-black text-light border-0 border-bottom border-success">
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php echo e($ref->id); ?>

                                                        </td>
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php echo e($ref->full_name); ?>

                                                        </td>
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php echo e($ref->email); ?>

                                                        </td>
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php echo e($ref->phone); ?>

                                                        </td>
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php echo e(currentPlan($ref)); ?>

                                                        </td>
                                                        <td
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <?php
                                                               $referrer = DB::table('users')
                                                                ->where('id', $ref->reffered_by)
                                                                ->select('fname', 'lname')
                                                                ->first();
                                                                echo $referrer->fname . ' ' . $referrer->lname; 
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                    <div class="col-12" style="overflow: auto !important;">
                                        <h5 class="my-3 text-light fw-bold"><?php echo e(__('Your Level 3 Team')); ?></h5>
                                        <table>
                                            <tr class="bg-success text-dark border-0 border-bottom border-success">
                                                <th class="bg-success text-dark border-0 border-bottom border-success">User
                                                    Id
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Username
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Email</th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Phone</th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Investment
                                                </th>
                                                <th class="bg-success text-dark border-0 border-bottom border-success">
                                                    Uplainer
                                                </th>
                                            </tr>
                                            <?php $__currentLoopData = $reference; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $user->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $__currentLoopData = $ref->refferals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr
                                                            class="bg-black text-light border-0 border-bottom border-success">
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php echo e($ref2->id); ?>

                                                            </td>
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php echo e($ref2->full_name); ?>

                                                            </td>
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php echo e($ref2->email); ?>

                                                            </td>
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php echo e($ref2->phone); ?>

                                                            </td>
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php echo e(currentPlan($ref2)); ?>

                                                            </td>
                                                            <td
                                                                class="bg-black text-light border-0 border-bottom border-success">
                                                                <?php
                                                                   $referrer = DB::table('users')
                                                                ->where('id', $ref2->reffered_by)
                                                                ->select('fname', 'lname')
                                                                ->first();
                                                                echo $referrer->fname . ' ' . $referrer->lname; 
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>

                                
                            <?php else: ?>
                                <p class="mt-2">
                                    <?php echo e(__('No Reference User Found')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    <script>
        'use strict'
        document.getElementById("imageUpload").onchange = function() {
            show();
        };

        function show() {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-id-preview");
                preview.src = src;
                preview.style.display = "block";
                document.getElementById("file-id-preview").style.visibility = "visible";
            }
        }
    </script>
    <script>
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
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/team.blade.php ENDPATH**/ ?>