<?php $__env->startSection('content2'); ?>
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
      <div class="nk-content-inner">
        <div class="nk-content-body">
          <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
              <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                  Investment Dashboard
                </h3>
                <div class="nk-block-des text-soft">
                  <p>Welcome to quantum Dashboard Template.</p>
                </div>
              </div>
              <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                  <a
                    href="#"
                    class="btn btn-icon btn-trigger toggle-expand me-n1"
                    data-target="pageMenu"
                    ><em class="icon ni ni-more-v"></em
                  ></a>
                  <div
                    class="toggle-expand-content"
                    data-content="pageMenu"
                  >
                    <ul class="nk-block-tools g-3">
                      <li>
                        <a
                          href="#"
                          class="btn btn-white btn-dim btn-outline-primary"
                          ><em class="icon ni ni-download-cloud"></em
                          ><span>Export</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="btn btn-white btn-dim btn-outline-primary"
                          ><em class="icon ni ni-reports"></em
                          ><span>Reports</span></a
                        >
                      </li>
                      <li class="nk-block-tools-opt">
                        <div class="drodown">
                          <a
                            href="#"
                            class="dropdown-toggle btn btn-icon btn-primary"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-plus"></em
                          ></a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <ul class="link-list-opt no-bdr">
                              <li>
                                <a href="#"
                                  ><em
                                    class="icon ni ni-user-add-fill"
                                  ></em
                                  ><span>Add User</span></a
                                >
                              </li>
                              <li>
                                <a href="#"
                                  ><em
                                    class="icon ni ni-coin-alt-fill"
                                  ></em
                                  ><span>Add Order</span></a
                                >
                              </li>
                              <li>
                                <a href="#"
                                  ><em
                                    class="icon ni ni-note-add-fill-c"
                                  ></em
                                  ><span>Add Page</span></a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nk-block">
            <div class="row g-gs">
              <div class="col-md-4">
                <div class="card card-bordered card-full">
                  <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                      <div class="card-title">
                        <h6 class="subtitle">Account balance</h6>
                      </div>
                      <div class="card-tools">
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format(auth()->user()->balance, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($withdraw, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
                    </div>
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($totalDeposit, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($totalInvest, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0); ?>
                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(isset($currentPlan->plan->plan_name) ? $currentPlan->plan->plan_name : 'N/A'); ?>
                        <span class="currency currency-usd"
                          ></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($pendingInvest, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($pendingWithdraw, 2) . ' ' . $general->site_currency); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
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
                        <em
                          class="card-hint icon ni ni-help-fill"
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Total Deposited"
                        ></em>
                      </div>
                    </div>
                    <div class="card-amount">
                      <span class="amount">
                        <?php echo e(number_format($commison, 2)); ?>

                        <span class="currency currency-usd"
                          > <?php echo e($general->site_currency); ?></span
                        ></span
                      ><span class="change up text-danger"
                        ></span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <label><?php echo e(__('Your refferal link')); ?></label>
                <div class="input-group mb-3">
                    <input type="text" id="refer-link" class="form-control copy-text"
                        value="<?php echo e(route('user.register', @Auth::user()->username)); ?>" placeholder="referallink.com/refer"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>
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
                        <a
                          class="nav-link active"
                          data-bs-toggle="tab"
                          href="#overview"
                          >Overview</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-bs-toggle="tab"
                          href="#thisyear"
                          >This Year</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          data-bs-toggle="tab"
                          href="#alltime"
                          >All Time</a
                        >
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
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">56</span
                                ><span class="change up text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-up"
                                  ></em
                                  ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                            <div class="invest-ov-info">
                              <div class="amount">
                                49,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
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
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">23</span
                                ><span class="change down text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-down"
                                  ></em
                                  ></span
=">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="thisyear">
                        <div class="invest-ov gy-2">
                          <div class="subtitle">
                            Currently Actived Investment
                          </div>
                          <div class="invest-ov-details">
                            <div class="invest-ov-info">
                              <div class="amount">
                                89,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">96</span
                                ><span class="change up text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-up"
                                  ></em
                                  ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                            <div class="invest-ov-info">
                              <div class="amount">
                                99,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
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
                                149,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">83</span
                                ><span class="change down text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-down"
                                  ></em
                                  ></span
=">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="alltime">
                        <div class="invest-ov gy-2">
                          <div class="subtitle">
                            Currently Actived Investment
                          </div>
                          <div class="invest-ov-details">
                            <div class="invest-ov-info">
                              <div class="amount">
                                249,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">556</span
                                ><span class="change up text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-up"
                                  ></em
                                  ></span
=">
                            </div>
                          </div>
                          <div class="invest-ov-details">
                            <div class="invest-ov-info">
                              <div class="amount">
                                149,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
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
                                249,395.395
                                <span class="currency currency-usd"
                                  >USD</span
                                >
                              </div>
                              <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                              <=>
                                <span class="amount">223</span
                                ><span class="change down text-danger"
                                  ><em
                                    class="icon ni ni-arrow-long-down"
                                  ></em
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
              <div class="col-md-6 col-xxl-4">
                <div class="card card-bordered card-full">
                  <div class="card-inner d-flex flex-column h-100">
                    <div class="card-title-group mb-3">
                      <div class="card-title">
                        <h6 class="title">Top Invested Plan</h6>
                        <p>In last 30 days top invested schemes.</p>
                      </div>
                      <div class="card-tools mt-n4 me-n1">
                        <div class="drodown">
                          <a
                            href="#"
                            class="dropdown-toggle btn btn-icon btn-trigger"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-more-h"></em
                          ></a>
                          <div
                            class="dropdown-menu dropdown-menu-sm dropdown-menu-end"
                          >
                            <ul class="link-list-opt no-bdr">
                              <li>
                                <a href="#"><span>15 Days</span></a>
                              </li>
                              <li>
                                <a href="#" class="active"
                                  ><span>30 Days</span></a
                                >
                              </li>
                              <li>
                                <a href="#"><span>3 Months</span></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="progress-list gy-3">
                      <div class="progress-wrap">
                        <div class="progress-text">
                          <div class="progress-label">Strater Plan</div>
                          <div class="progress-amount">58%</div>
                        </div>
                        <div class="progress progress-md">
                          <div
                            class="progress-bar"
                            data-progress="58"
                          ></div>
                        </div>
                      </div>
                      <div class="progress-wrap">
                        <div class="progress-text">
                          <div class="progress-label">Silver Plan</div>
                          <div class="progress-amount">18.49%</div>
                        </div>
                        <div class="progress progress-md">
                          <div
                            class="progress-bar bg-orange"
                            data-progress="18.49"
                          ></div>
                        </div>
                      </div>
                      <div class="progress-wrap">
                        <div class="progress-text">
                          <div class="progress-label">Dimond Plan</div>
                          <div class="progress-amount">16%</div>
                        </div>
                        <div class="progress progress-md">
                          <div
                            class="progress-bar bg-teal"
                            data-progress="16"
                          ></div>
                        </div>
                      </div>
                      <div class="progress-wrap">
                        <div class="progress-text">
                          <div class="progress-label">Platinam Plan</div>
                          <div class="progress-amount">29%</div>
                        </div>
                        <div class="progress progress-md">
                          <div
                            class="progress-bar bg-pink"
                            data-progress="29"
                          ></div>
                        </div>
                      </div>
                      <div class="progress-wrap">
                        <div class="progress-text">
                          <div class="progress-label">Vibranium Plan</div>
                          <div class="progress-amount">33%</div>
                        </div>
                        <div class="progress progress-md">
                          <div
                            class="progress-bar bg-azure"
                            data-progress="33"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="invest-top-ck mt-auto">
                      <canvas
                        class="iv-plan-purchase"
                        id="planPurchase"
                      ></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xxl-4">
                <div class="card card-bordered card-full">
                  <div class="card-inner border-bottom">
                    <div class="card-title-group">
                      <div class="card-title">
                        <h6 class="title">Recent Activities</h6>
                      </div>
                      <div class="card-tools">
                        <ul class="card-tools-nav">
                          <li>
                            <a href="#"><span>Cancel</span></a>
                          </li>
                          <li class="active">
                            <a href="#"><span>All</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <ul class="nk-activity">
                    <li class="nk-activity-item">
                      <div
                        class="nk-activity-media user-avatar bg-success"
                      >
                        <img src="images/avatar/c-sm.jpg" alt="" />
                      </div>
                      <div class="nk-activity-data">
                        <div class="label">
                          Keith Jensen requested to Widthdrawl.
                        </div>
                        <span class="time">2 hours ago</span>
                      </div>
                    </li>
                    <li class="nk-activity-item">
                      <div
                        class="nk-activity-media user-avatar bg-warning"
                      >
                        HS
                      </div>
                      <div class="nk-activity-data">
                        <div class="label">
                          Harry Simpson placed a Order.
                        </div>
                        <span class="time">2 hours ago</span>
                      </div>
                    </li>
                    <li class="nk-activity-item">
                      <div class="nk-activity-media user-avatar bg-azure">
                        SM
                      </div>
                      <div class="nk-activity-data">
                        <div class="label">
                          Stephanie Marshall got a huge bonus.
                        </div>
                        <span class="time">2 hours ago</span>
                      </div>
                    </li>
                    <li class="nk-activity-item">
                      <div
                        class="nk-activity-media user-avatar bg-purple"
                      >
                        <img src="images/avatar/d-sm.jpg" alt="" />
                      </div>
                      <div class="nk-activity-data">
                        <div class="label">
                          Nicholas Carr deposited funds.
                        </div>
                        <span class="time">2 hours ago</span>
                      </div>
                    </li>
                    <li class="nk-activity-item">
                      <div class="nk-activity-media user-avatar bg-pink">
                        TM
                      </div>
                      <div class="nk-activity-data">
                        <div class="label">
                          Timothy Moreno placed a Order.
                        </div>
                        <span class="time">2 hours ago</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-xxl-4">
                <div class="card card-bordered h-100">
                  <div class="card-inner border-bottom">
                    <div class="card-title-group">
                      <div class="card-title">
                        <h6 class="title">Notifications</h6>
                      </div>
                      <div class="card-tools">
                        <a href="#" class="link">View All</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-inner">
                    <div class="timeline">
                      <h6 class="timeline-head">November, 2019</h6>
                      <ul class="timeline-list">
                        <li class="timeline-item">
                          <div
                            class="timeline-status bg-primary is-outline"
                          ></div>
                          <div class="timeline-date">
                            13 Nov <em class="icon ni ni-alarm-alt"></em>
                          </div>
                          <div class="timeline-data">
                            <h6 class="timeline-title">
                              Submited KYC Application
                            </h6>
                            <div class="timeline-des">
                              <p>Re-submitted KYC form.</p>
                              <span class="time">09:30am</span>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-status bg-primary"></div>
                          <div class="timeline-date">
                            13 Nov <em class="icon ni ni-alarm-alt"></em>
                          </div>
                          <div class="timeline-data">
                            <h6 class="timeline-title">
                              Submited KYC Application
                            </h6>
                            <div class="timeline-des">
                              <p>Re-submitted KYC form.</p>
                              <span class="time">09:30am</span>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-status bg-pink"></div>
                          <div class="timeline-date">
                            13 Nov <em class="icon ni ni-alarm-alt"></em>
                          </div>
                          <div class="timeline-data">
                            <h6 class="timeline-title">
                              Submited KYC Application
                            </h6>
                            <div class="timeline-des">
                              <p>Re-submitted KYC form.</p>
                              <span class="time">09:30am</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 col-xxl-8">
                <div class="card card-bordered card-full">
                  <div class="card-inner border-bottom">
                    <div class="card-title-group">
                      <div class="card-title">
                        <h6 class="title">Recent Investment</h6>
                      </div>
                      <div class="card-tools">
                        <a href="#" class="link">View All</a>
                      </div>
                    </div>
                  </div>
                  <div class="nk-tb-list">
                    <div class="nk-tb-item nk-tb-head">
                      <div class="nk-tb-col"><span>Plan</span></div>
                      <div class="nk-tb-col tb-col-sm">
                        <span>Who</span>
                      </div>
                      <div class="nk-tb-col tb-col-lg">
                        <span>Date</span>
                      </div>
                      <div class="nk-tb-col"><span>Amount</span></div>
                      <div class="nk-tb-col tb-col-sm">
                        <span>&nbsp;</span>
                      </div>
                      <div class="nk-tb-col"><span>&nbsp;</span></div>
                    </div>
                    <div class="nk-tb-item">
                      <div class="nk-tb-col">
                        <div class="align-center">
                          <div
                            class="user-avatar user-avatar-sm bg-light"
                          >
                            <span>P2</span>
                          </div>
                          <span class="tb-sub ms-2"
                            >Dimond
                            <span class="d-none d-md-inline"
                              >- Daily 8.52% for 14 Days</span
                            ></span
                          >
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <div class="user-card">
                          <div
                            class="user-avatar user-avatar-xs bg-azure-dim"
                          >
                            <span>VA</span>
                          </div>
                          <div class="user-name">
                            <span class="tb-lead">Victoria Aguilar</span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-lg">
                        <span class="tb-sub">18/10/2019</span>
                      </div>
                      <div class="nk-tb-col">
                        <span class="tb-sub tb-amount"
                          >1.094780 <span>BTC</span></span
                        >
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <span class="tb-sub text-success">Completed</span>
                      </div>
                      <div class="nk-tb-col nk-tb-col-action">
                        <div class="dropdown">
                          <a
                            class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-chevron-right"></em
                          ></a>
                          <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                          >
                            <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Invoice</a></li>
                              <li><a href="#">Print</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nk-tb-item">
                      <div class="nk-tb-col">
                        <div class="align-center">
                          <div
                            class="user-avatar user-avatar-sm bg-light"
                          >
                            <span>P3</span>
                          </div>
                          <span class="tb-sub ms-2"
                            >Platinam
                            <span class="d-none d-md-inline"
                              >- Daily 14.82% for 7 Days</span
                            ></span
                          >
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <div class="user-card">
                          <div
                            class="user-avatar user-avatar-xs bg-purple-dim"
                          >
                            <span>EH</span>
                          </div>
                          <div class="user-name">
                            <span class="tb-lead">Emma Henry</span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-lg">
                        <span class="tb-sub">18/10/2019</span>
                      </div>
                      <div class="nk-tb-col">
                        <span class="tb-sub tb-amount"
                          >1.094780 <span>BTC</span></span
                        >
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <span class="tb-sub text-success">Completed</span>
                      </div>
                      <div class="nk-tb-col nk-tb-col-action">
                        <div class="dropdown">
                          <a
                            class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-chevron-right"></em
                          ></a>
                          <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                          >
                            <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Invoice</a></li>
                              <li><a href="#">Print</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nk-tb-item">
                      <div class="nk-tb-col">
                        <div class="align-center">
                          <div
                            class="user-avatar user-avatar-sm bg-light"
                          >
                            <span>P1</span>
                          </div>
                          <span class="tb-sub ms-2"
                            >Silver
                            <span class="d-none d-md-inline"
                              >- Daily 4.76% for 21 Days</span
                            ></span
                          >
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <div class="user-card">
                          <div
                            class="user-avatar user-avatar-xs bg-teal-dim"
                          >
                            <span>AF</span>
                          </div>
                          <div class="user-name">
                            <span class="tb-lead">Alice Ford</span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-lg">
                        <span class="tb-sub">18/10/2019</span>
                      </div>
                      <div class="nk-tb-col">
                        <span class="tb-sub tb-amount"
                          >1.094780 <span>BTC</span></span
                        >
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <span class="tb-sub text-success">Completed</span>
                      </div>
                      <div class="nk-tb-col nk-tb-col-action">
                        <div class="dropdown">
                          <a
                            class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-chevron-right"></em
                          ></a>
                          <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                          >
                            <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Invoice</a></li>
                              <li><a href="#">Print</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nk-tb-item">
                      <div class="nk-tb-col">
                        <div class="align-center">
                          <div
                            class="user-avatar user-avatar-sm bg-light"
                          >
                            <span>P3</span>
                          </div>
                          <span class="tb-sub ms-2"
                            >Platinam
                            <span class="d-none d-md-inline"
                              >- Daily 14.82% for 7 Days</span
                            ></span
                          >
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <div class="user-card">
                          <div
                            class="user-avatar user-avatar-xs bg-orange-dim"
                          >
                            <span>HW</span>
                          </div>
                          <div class="user-name">
                            <span class="tb-lead">Harold Walker</span>
                          </div>
                        </div>
                      </div>
                      <div class="nk-tb-col tb-col-lg">
                        <span class="tb-sub">18/10/2019</span>
                      </div>
                      <div class="nk-tb-col">
                        <span class="tb-sub tb-amount"
                          >1.094780 <span>BTC</span></span
                        >
                      </div>
                      <div class="nk-tb-col tb-col-sm">
                        <span class="tb-sub text-success">Completed</span>
                      </div>
                      <div class="nk-tb-col nk-tb-col-action">
                        <div class="dropdown">
                          <a
                            class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger"
                            data-bs-toggle="dropdown"
                            ><em class="icon ni ni-chevron-right"></em
                          ></a>
                          <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-xs"
                          >
                            <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Invoice</a></li>
                              <li><a href="#">Print</a></li>
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

    <?php $__env->startPush('script'); ?>
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
            responsive: [
                {
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
    <?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmc\core\resources\views/theme4/user/dashboard.blade.php ENDPATH**/ ?>
