<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2024 12:20:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="images/favicon.png" />
    <title>Invest Dashboard | DashLite Admin Template</title>
    <link rel="stylesheet" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/dashlitee5ca.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/iziToast.min.css')); ?>">
    <link id="skin-default" rel="stylesheet"
        href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/themee5ca.css')); ?>" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>
    <style>
        .nk-content-fluid {
            padding-top: 100px;
        }

        @media  screen and (min-width: 991px) {
            .nk-content-fluid {
                padding-top: 170px;
            }
        }
    </style>
</head>

<body class="nk-body npc-invest bg-lighter">

    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-header nk-header-fluid is-theme is-regular">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="<?php echo e(url('/dashboard')); ?>" class="logo-link"><img
                                    src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                    alt="logo" />
                            </a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="logo-link"><img
                                            src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                            alt="logo" />
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                        data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Dashboard</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Investment</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('investmentplan')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Investment plans</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('invest/log')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Investment log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Deposit</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('deposit')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Deposit</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('deposit/log')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Deposit log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Withdraw</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('withdraw')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Withdraw</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('withdraw/all')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Withdraw log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('transfer-money')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Transfer monney</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('money/transfer/log')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Money Transfer log</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('interest/log')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Interest log</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('transaction/log')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Transaction log</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('commision')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Refferal log</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('2fa')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">2FA</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('ticket')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Support</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('logout')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Logout</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info">
                                            <em class="icon ni ni-bell"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span><a
                                                href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status"></div>
                                                <div class="user-name dropdown-indicator">
                                                    <?php echo e(auth()->user()->full_name); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar"><span>
                                                        <?php if(@Auth::user()->image): ?>
                                                            <img src="<?php echo e(getFile('user', @Auth::user()->image)); ?>">
                                                        <?php else: ?>
                                                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                                                                alt="pp">
                                                        <?php endif; ?>
                                                    </span></div>
                                                <div class="user-info">
                                                    <span
                                                        class="lead-text"><?php echo e(auth()->user()->full_name); ?></span><span
                                                        class="sub-text"><?php echo e(auth()->user()->email); ?></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="<?php echo e(url('2fa')); ?>"><em
                                                            class="icon ni ni-user-alt"></em><span>2FA</span></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(url('profile/setting')); ?>"><em
                                                            class="icon ni ni-setting-alt"></em><span>Setting</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="<?php echo e(url('logout')); ?>"><em
                                                            class="icon ni ni-signout"></em><span>Sign
                                                            out</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="quick-icon">
                                            <img class="icon" src="images/flags/english-sq.png" alt="" />
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/english.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">English</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/spanish.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Español</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/french.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Français</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/turkey.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Türkçe</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('content2'); ?>
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">
                            &copy; 2023 DashLite. Template by
                            <a href="https://softnio.com/" target="_blank">Softnio</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item dropup">
                                    <a href="#"
                                        class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                                        data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item"><span
                                                        class="language-name">English</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><span
                                                        class="language-name">Español</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><span
                                                        class="language-name">Français</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><span
                                                        class="language-name">Türkçe</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="modal" href="#region" class="nav-link"><em
                                            class="icon ni ni-globe"></em><span class="ms-1">Select
                                            Region</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/arg.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Argentina</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/aus.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Australia</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/bangladesh.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Bangladesh</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/canada.png"
                                        alt="" class="country-flag" /><span class="country-name">Canada
                                        <small>(English)</small></span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/china.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Centrafricaine</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/china.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">China</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/french.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">France</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/germany.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Germany</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/iran.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Iran</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/italy.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Italy</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/mexico.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">México</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/philipine.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Philippines</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/portugal.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Portugal</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/s-africa.png"
                                        alt="" class="country-flag" /><span class="country-name">South
                                        Africa</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/spanish.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Spain</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/switzerland.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Switzerland</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/uk.png" alt=""
                                        class="country-flag" /><span class="country-name">United Kingdom</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/english.png"
                                        alt="" class="country-flag" /><span class="country-name">United
                                        State</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nk-sticky-toolbar">
        <li class="demo-layout">
            <a class="toggle tipinfo" data-target="demoML" href="#" title="Main Demo Preview"><em
                    class="icon ni ni-dashlite"></em></a>
        </li>
        <li class="demo-thumb">
            <a class="toggle tipinfo" data-target="demoUC" href="#" title="Use Case Concept"><em
                    class="icon ni ni-menu-squared"></em></a>
        </li>
        <li class="demo-settings">
            <a class="toggle tipinfo" data-target="settingPanel" href="#" title="Demo Settings"><em
                    class="icon ni ni-setting-alt"></em></a>
        </li>
        <li class="demo-purchase">
            <a class="tipinfo" target="_blank" href="https://1.envato.market/e0y3g" title="Purchase"><em
                    class="icon ni ni-cart"></em></a>
        </li>
    </ul>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo1/index.html">
                    <div class="nk-demo-image bg-blue">
                        <img class="bg-purple" src="../images/landing/layout-1d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-1d2x.jpg 2x" alt="Demo Layout 1" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 1</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo2/index.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/layout-2d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-2d2x.jpg 2x" alt="Demo Layout 2" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 2</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/index.html">
                    <div class="nk-demo-image bg-success">
                        <img src="../images/landing/layout-3d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-3d2x.jpg 2x" alt="Demo Layout 3" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 3</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo4/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/layout-4d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-4d2x.jpg 2x" alt="Demo Layout 4" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 4</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo5/index.html">
                    <div class="nk-demo-image bg-orange">
                        <img src="../images/landing/layout-5d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-5d2x.jpg 2x" alt="Demo Layout 5" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 5</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="index-2.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/layout-6d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-6d2x.jpg 2x" alt="Demo Layout 6" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 6</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo7/index.html">
                    <div class="nk-demo-image bg-teal">
                        <img src="../images/landing/layout-7d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-7d2x.jpg 2x" alt="Demo Layout 7" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 7</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo8/index.html">
                    <div class="nk-demo-image bg-azure">
                        <img src="../images/landing/layout-8d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-8d2x.jpg 2x" alt="Demo Layout 8" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 8</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo9/index.html">
                    <div class="nk-demo-image bg-pink">
                        <img src="../images/landing/layout-9d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-9d2x.jpg 2x" alt="Demo Layout 9" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 9</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/landing/index.html">
                    <div class="nk-demo-image bg-red">
                        <img src="../images/landing/main-landing.jpg"
                            srcset="
                        https://dashlite.net/images/landing/main-landing2x.jpg 2x
                      "
                            alt="Landing Page" />
                    </div>
                    <span class="nk-demo-title"><strong>Landing Page</strong>
                        <span class="badge badge-danger ml-1">Free</span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoUC"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoUC"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo9/copywriter/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-ai-copywriter.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-ai-copywriter2x.jpg 2x
                      "
                            alt="ai-copywriter" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo9</em><br /><strong>Ai Copywriter
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo7/pharmacy/index.html">
                    <div class="nk-demo-image bg-warning">
                        <img src="../images/landing/demo-pharmacy.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-pharmacy2x.jpg 2x
                      "
                            alt="pharmacy" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br /><strong>Pharmacy Management
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo5/loan/index.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-loan.jpg"
                            srcset="https://dashlite.net/images/landing/demo-loan2x.jpg 2x" alt="loan" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo5</em><br /><strong>Loan Management
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo2/ecommerce/index.html">
                    <div class="nk-demo-image bg-dark">
                        <img src="../images/landing/demo-ecommerce.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x
                      "
                            alt="Ecommerce" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br /><strong>E-Commerce
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo2/lms/index.html">
                    <div class="nk-demo-image bg-danger">
                        <img src="../images/landing/demo-lms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x" alt="LMS" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br /><strong>LMS / Learning
                            Management System</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo1/crm/index.html">
                    <div class="nk-demo-image bg-info">
                        <img src="../images/landing/demo-crm.jpg"
                            srcset="https://dashlite.net/images/landing/demo-crm2x.jpg 2x"
                            alt="CRM / Customer Relationship" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo1</em><br /><strong>CRM / Customer
                            Relationship Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo7/hospital/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-hospital.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-hospital2x.jpg 2x
                      "
                            alt="Hospital Managemen" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br /><strong>Hospital
                            Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo1/hotel/index.html">
                    <div class="nk-demo-image bg-pink">
                        <img src="../images/landing/demo-hotel.jpg"
                            srcset="https://dashlite.net/images/landing/demo-hotel2x.jpg 2x" alt="Hotel Managemen" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo1</em><br /><strong>Hotel
                            Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/cms/index.html">
                    <div class="nk-demo-image bg-dark">
                        <img src="../images/landing/demo-cms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x" alt="cms" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>CMS
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning">
                        <img src="../images/landing/demo-buysell.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-buysell2x.jpg 2x
                      "
                            alt="Crypto BuySell / Wallet" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo5</em><br /><strong>Crypto BuySell
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="invest/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-invest.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-invest2x.jpg 2x
                      "
                            alt="HYIP / Investment" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo6</em><br /><strong>HYIP / Investment
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/apps/file-manager.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-file-manager.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x
                      "
                            alt="File Manager" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps - File
                            Manager</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo4/subscription/index.html">
                    <div class="nk-demo-image bg-primary">
                        <img src="../images/landing/demo-subscription.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-subscription2x.jpg 2x
                      "
                            alt="SAAS / Subscription" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo4</em><br /><strong>SAAS / Subscription
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/covid/index.html">
                    <div class="nk-demo-image bg-danger">
                        <img src="../images/landing/demo-covid19.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-covid192x.jpg 2x
                      "
                            alt="Covid Situation" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Covid</em><br /><strong>Coronavirus
                            Situation</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success">
                        <img src="../images/landing/demo-messages.jpg"
                            srcset="
                        https://dashlite.net/images/landing/demo-messages2x.jpg 2x
                      "
                            alt="Messages" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Messages</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/apps/mailbox.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-inbox.jpg"
                            srcset="https://dashlite.net/images/landing/demo-inbox2x.jpg 2x" alt="Inbox" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Mailbox</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://dashlite.net/demo3/apps/chats.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-chats.jpg"
                            srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x"
                            alt="Chats / Messenger" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Chats</strong></span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel" data-toggle-overlay="true"
        data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="settingPanel"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Direction Change</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="dir" data-update="ltr">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">LTR Mode</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="dir" data-update="rtl">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL Mode</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Main UI Style</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="style" data-update="ui-default">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Default</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-clean">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Clean</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-shady">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Shady</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-softy">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Softy</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-header">
                <div class="nk-opt-set-title">Header Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item active" data-key="header" data-update="is-light">
                        <span class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-default">
                        <span class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-dark">
                        <span class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                            class="nk-opt-item-name">Dark</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-theme">
                        <span class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                            class="nk-opt-item-name">Theme</span>
                    </div>
                </div>
                <div class="nk-opt-set-title">Header Option</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="header_opt" data-update="is-regular">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Regular</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="header_opt" data-update="nk-header-fixed">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Fixed</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-skin">
                <div class="nk-opt-set-title">Primary Skin</div>
                <div class="nk-opt-list">
                    <div class="nk-opt-item active" data-key="skin" data-update="default">
                        <span class="nk-opt-item-bg"><span class="skin-default"></span></span><span
                            class="nk-opt-item-name">Default</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue">
                        <span class="nk-opt-item-bg"><span class="skin-blue"></span></span><span
                            class="nk-opt-item-name">Blue</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="egyptian">
                        <span class="nk-opt-item-bg"><span class="skin-egyptian"></span></span><span
                            class="nk-opt-item-name">Egyptian</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="purple">
                        <span class="nk-opt-item-bg"><span class="skin-purple"></span></span><span
                            class="nk-opt-item-name">Purple</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="green">
                        <span class="nk-opt-item-bg"><span class="skin-green"></span></span><span
                            class="nk-opt-item-name">Green</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="red">
                        <span class="nk-opt-item-bg"><span class="skin-red"></span></span><span
                            class="nk-opt-item-name">Red</span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Skin Mode</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode">
                        <span class="nk-opt-item-bg is-light"><span class="theme-light"></span></span><span
                            class="nk-opt-item-name">Light Skin</span>
                    </div>
                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode">
                        <span class="nk-opt-item-bg"><span class="theme-dark"></span></span><span
                            class="nk-opt-item-name">Dark Skin</span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-reset">
                <a href="#" class="reset-opt-setting">Reset Setting</a>
            </div>
        </div>
    </div>
    <div class="pmo-lv pmo-dark">
        <a class="pmo-close" href="#"><em class="ni ni-cross"></em></a><a class="pmo-wrap" target="_blank"
            href="https://softnio.com/get-early-access/">
            <div class="pmo-text text-white">
                Looking for functional script for Investment Platform? Check out
                <em class="ni ni-arrow-long-right"></em>
            </div>
        </a>
    </div>
    <a class="pmo-st pmo-dark" target="_blank" href="https://softnio.com/get-early-access/">
        <div class="pmo-st-img">
            <img src="../images/landing/promo-investorm.png" alt="Investorm" />
        </div>
        <div class="pmo-st-text">
            Looking for Advanced <br />
            Investment Platform?
        </div>
    </a>



    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/bundlee5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/scriptse5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/demo-settingse5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/charts/gd-investe5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/iziToast.min.js')); ?>"></script>

    <?php
        $content = content('contact.content');
        $contentlink = content('footer.content');
        $footersociallink = element('footer.element');
        $serviceElements = element('service.element');
    ?>

    <script src="<?php echo e(asset('asset/theme4/frontend/js/user_dashboard.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
    <?php if(@$general->twak_allow): ?>
        <script type="text/javascript">
            'use strict'
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "https://embed.tawk.to/<?php echo e(@$general->twak_key); ?>";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        
        <script>
            "use strict";
            alert('<?php echo e(session('error')); ?>');
        </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
        <script>
            "use strict";
            iziToast.success({
                message: "<?php echo e(session('success')); ?>",
                position: 'topRight'
            });
        </script>
    <?php endif; ?>
    <?php if(session()->has('notify')): ?>
        <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                "use strict";
                iziToast.<?php echo e($msg[0]); ?>({
                    message: "<?php echo e(trans($msg[1])); ?>",
                    position: "topRight"
                });
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(@$errors->any()): ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                iziToast.error({
                    message: '<?php echo e(__($error)); ?>',
                    position: "topRight"
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
    <script>
        'use strict'
        var url = "<?php echo e(route('user.changeLang')); ?>";

        $(".changeLang").change(function() {
            if ($(this).val() == '') {
                return false;
            }
            window.location.href = url + "?lang=" + $(this).val();
        });

        feather.replace();

        // responsive menu slideing
        $(".d-sidebar-menu>li>a").on("click", function() {
            var element = $(this).parent("li");
            if (element.hasClass("open")) {
                element.removeClass("open");
                element.find("li").removeClass("open");
                element.find("ul").slideUp(500, "linear");
            } else {
                element.addClass("open");
                element.children("ul").slideDown();
                element.siblings("li").children("ul").slideUp();
                element.siblings("li").removeClass("open");
                element.siblings("li").find("li").removeClass("open");
                element.siblings("li").find("ul").slideUp();
            }
        });

        $('.sidebar-open-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.d-sidebar').toggleClass('active');
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\cmc\core\resources\views/theme4/layout/master2.blade.php ENDPATH**/ ?>