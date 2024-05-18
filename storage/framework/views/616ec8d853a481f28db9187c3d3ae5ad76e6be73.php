
<?php $__env->startSection('content2'); ?>
    <style>
        .table th,
        .table td {
            font-size: 9px !important;
            color: black !important;
        }
    </style>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="col-md-6 col-xxl-4 p-3">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Total Members</th>
                                            <th>Total Deposit</th>
                                            <th>Total Commision</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e($TotalTeamMembers); ?></td>
                                            <td><?php echo e(round($TotalTeamDeposit, 2)); ?></td>
                                            <td><?php echo e(round($totalTeamCom, 2)); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Level 1 Members</th>
                                            <th>Level 1 Deposit</th>
                                            <th>Level 1 Commision</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e(count($LvlOneUsers)); ?></td>
                                            <td><?php echo e(round($SumLvlOneDepositAmnt->total_amount, 2)); ?></td>
                                            <td><?php echo e(round($SumLvlOneComAmnt->total_com, 2)); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Level 2 Members</th>
                                            <th>Level 2 Deposit</th>
                                            <th>Level 2 Commision</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e(count($LvlTwoUsers)); ?></td>
                                            <td><?php echo e(round($SumLvlTwoDepositAmnt->total_amount, 2)); ?></td>
                                            <td><?php echo e(round($SumLvlTwoComAmnt->total_com, 2)); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Level 3 Members</th>
                                            <th>Level 3 Deposit</th>
                                            <th>Level 3 Commision</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e(count($LvlThreeUsers)); ?></td>
                                            <td><?php echo e(round($SumLvlThreeDepositAmnt->total_amount, 2)); ?></td>
                                            <td><?php echo e(round($SumLvlThreeComAmnt->total_com, 2)); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                        <h6 style="font-size: 11px;">Username: <span
                                                class="text-success"><?php echo e(@Auth::user()->username); ?></span>
                                        </h6>
                                    </div>
                                    <div class="bg-dark rounded p-3 mt-3">
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">- In
                                            (V1) you're able to invest upto 250$
                                            estimated profit daily 1.8%~ 2.3%.</p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">- To Achieve V2 you
                                            have
                                            to achieve 30
                                            members and 10 members must be on level 1
                                            with the minimum deposit of 100$ V1 Completion Reward is 75$ And Overall Deposit
                                            Must be 3000$ to Receive The Reward. and you're able to invest upto 500$</p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">- To Achieve V3 you
                                            have
                                            to Complete 50
                                            Members and 15 members must be on level
                                            one 1 with Minimum Deposit of 100$ V2 Completion Reward is 100$ and Overall
                                            Deposit Must be 5000$ to Receive the reward amount and you're able to invest
                                            1000$</p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">- To Achieve V4 you
                                            have
                                            to Complete 80
                                            Members and 30 members must be on level
                                            one 1 with Minimum Deposit of 100$ V2 Completion Reward is 140$ and Overall
                                            Deposit Must be 8000$ to Receive the reward amount and you're
                                            able to invest 2000$</p>
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