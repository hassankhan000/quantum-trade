<?php $__env->startSection('content'); ?>
    <div class="hero-wrapper hero-1">
        <div class="hero-bg-gradient">
        </div>
        <div class="ripple-shape">
            <span class="ripple-1"></span>
            <span class="ripple-2"></span>
            <span class="ripple-3"></span>
            <span class="ripple-4"></span>
            <span class="ripple-5"></span>
        </div>

        <div class="container">
            <div class="hero-style1">
                <div class="row flex-row-reverse">
                    <div class="col-lg-3">
                        <div class="hero-thumb alltuchtopdown">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="img">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="hero-title">Putting Your Money in Product Backed Projects</h1>
                        <div class="btn-wrap">
                            <a href="contact.html" class="btn btn2">
                                Start Bot Trade
                            </a>
                            <a href="blog.html" class="btn btn-two">
                                Register With US
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hero-countdown-wrap">
                <h2 class="hero-countdown-wrap-title">ICO will start in..</h2>
                <ul class="skill-feature_list">
                    <li><span>Value</span> of technology invested</li>
                    <li><span>Private</span> sale</li>
                    <li>
                        <h4>ICO</h4>
                    </li>
                </ul>
                <div class="skill-feature">
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%">
                        </div>
                    </div>
                    <div class="progress-value-max">100 Min $</div>
                </div>
                <ul class="skill-feature_list style2">
                    <li>7.75 Min</li>
                    <li>1.5 Min</li>
                    <li>140,000 $ chosen</li>
                </ul>
                <div class="banner-countdown-wrap">
                    <div class="coming-time" data-countdown="2024/8/29"></div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
                                        Brand Area 2
                                        ==============================-->
    <div class="brand-area2">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="brand-title text-center">
                        <h6 class="title">Our top Partner</h6>
                    </div>
                </div>
            </div>
            <div class="brand-item-wrap style2">
                <div class="row g-0 brand-active2">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/vanguard.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/berkshire.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/JPMorganChase.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/Wealthfront.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/brand/brand_img05.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/brand/brand_img06.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/brand/brand_img07.png')); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/brand/brand_img04.png')); ?>"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                        Why Choose Us Area
                                        ==============================-->
    <div class="wcu-area-1 pt-130 pb-140 position-relative" id="about">
        <div class="bg-gradient-1">
            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg')); ?>" alt="img">
        </div>
        <div class="container">
            <div class="">
                <div class="row gy-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-0">
                            <?php
                                $content = content('about.content');
                            ?>
                            <h2 class="title style2">About Us</h2>
                            <p class="sec-text">Introducing Efficiency, Precision And Profits.</p>
                            <p style="color:rgb(255, 255, 255);font-size:1.125rem;"> a new investment strategy that
                                leverages quantum computing and artificial intelligence to maximize returns and minimize
                                risk.
                                Solution
                                - Advanced quantum computing for rapid market analysis
                                - AI-powered decision-making for optimal trades
                                - Emotion-free, data-driven approach
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="wcu-thumb text-center alltuchtopdown">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/normal/why_1-1.png')); ?>"
                                alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                        Intro Area
                                        ==============================-->
    <div class="pt-130 overflow-hidden bg-black2" id="howitwork">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title mb-45">
                        <?php
                            $content = content('howitwork.content');
                            $elements = element('howitwork.element')->take(8);
                        ?>
                        <h2 class="title style2">Started Investing With Quantum Trade Ai</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    
                    <div class="intro-wrap mt-xl-4">
                        <h6 class="intro-wrap-title">Create An Account</h6>
                        <p class="intro-wrap-text"> Register With Your Authentic Email, Registered Number, And Contact your
                            regional Manager </p>
                    </div>
                    <div class="intro-wrap mt-xl-4">
                        <h6 class="intro-wrap-title">Choose Strategy</h6>
                        <p class="intro-wrap-text"> Select Suitable Plan, Worlds Best Strategies Algorithm Trading Bot, New
                            Tech Quantum Ai Trading Bot and Wide Range Of investment</p>
                    </div>
                    <div class="intro-wrap mt-x1-6">
                        <h6 class="intro-wrap-title">Get Profit</h6>
                        <p class="intro-wrap-text">More investment And More Returns, You Can Take Benefits and rewards From
                            it </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="intro-thumb1 alltuchtopdown">
                        <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/normal/intro_1-1.png')); ?>"
                            alt="img">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                            RoadMap Area 2
                                        ==============================-->
    <div class="pt-130 pb-140 overflow-hidden bg-black2 position-relative z-index-common" id="roadMap">
        <div class="bg-gradient-2">
            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg')); ?>" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-sm-8">
                    <div class="section-title mb-50">
                        <h2 class="title style2">Our Roadmap</h2>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="icon-box">
                        <button class="slider-arrow prev-btn default"><i class="fas fa-arrow-left"></i></button>
                        <button class="slider-arrow next-btn default"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="slider-area position-relative">
                <div class="row roadMap-active2 roadmap-slider1">
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">End of Q4 2021</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>Research</h4>
                                <p>SubQuery Builders/Grants Program SQT Network contract internal MVP Coordinator and client
                                    SDK implementations</p>
                                    <a class="btn mt-2" href="<?php echo e(asset('asset/theme4/web_assets/assets/img/QuantumAi.pdf')); ?>"> Check Document </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Beyond The Expenses - June 2021</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>White Paper</h4>
                                <p>An allocation to global bond markets gives investors exposure to a greater number of
                                    securities, markets and economic and inflation environments than they would have with a
                                    portfolio composed purely of local market fixed income. In theory, this diversification
                                    can help reduce a portfolio’s volatility without necessarily decreasing its total
                                    return.</p>
                                    <a class="btn mt-2" href="<?php echo e(asset('asset/theme4/web_assets/assets/img/beyond-expense-ratios-eu-en-Quantum Trade.pdf')); ?>"> Check Document </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Going Global With Bonds-ISGGLBD_052024</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>Token Test</h4>
                                <p>SubQuery Builders/Grants Program SQT Network contract internal MVP Coordinator and client
                                    SDK implementations</p>
                                    <a class="btn mt-2" href="<?php echo e(asset('asset/theme4/web_assets/assets/img/GoingGlobal.pdf')); ?>"> Check Document </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Value OF Human And Robo-Advice Feb-2022</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>Survey</h4>
                                <p>In this paper, we quantify how much investors value financial advice and where they
                                    believe advisers add value. Using a survey of more than 1,500 US investors who reported
                                    having a human adviser, a digital service, or both </p>
                                    <a class="btn mt-2" href="<?php echo e(asset('asset/theme4/web_assets/assets/img/valueofhuman.pdf')); ?>"> Check Document </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                        Invest Area
                                        ==============================-->
    <div class="pt-130 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center mb-50">
                        <h2 class="title style2">Invest in Our Most Profitable Trading Bots</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="icon">
                        </div>
                        <a class="btn btn3" href="#">Invest In V1 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="icon">
                        </div>
                        <a class="btn btn3" href="#">Invest In V2 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="icon">
                        </div>
                        <a class="btn btn3" href="#">Invest In V3 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="icon">
                        </div>
                        <a class="btn btn3" href="#">Invest In V4 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/bot.png')); ?>"
                                alt="icon">
                        </div>
                        <a class="btn btn3" href="#">Invest In V5 Bot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                        Team Area
                                        ==============================-->
    <div class="pt-130 pb-140 overflow-hidden position-relative z-index-common">
        <div class="bg-gradient-3">
            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg')); ?>" alt="img">
        </div>

        <!--==============================
                                            Founder Area
                                            ==============================-->
        <div class="pb-110">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2 class="title style2">Active founders</h2>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="founder-card">
                            <div class="founder-card-img">
                                <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/anna.JPG')); ?>"
                                    alt="img">
                            </div>
                            <div class="founder-card-details">
                                <h3 class="founder-card-title">Eleanor Pena</h3>
                                <p class="founder-card-desig">Founder & CEO</p>
                                <div class="social-btn">
                                    <a href="https://www.linkedin.com/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M10.0596 7.34522L15.8879 0.570312H14.5068L9.44607 6.45287L5.40411 0.570312H0.742188L6.85442 9.46578L0.742188 16.5703H2.12338L7.4676 10.3581L11.7362 16.5703H16.3981L10.0593 7.34522H10.0596ZM8.16787 9.54415L7.54857 8.65836L2.62104 1.61005H4.74248L8.71905 7.29827L9.33834 8.18405L14.5074 15.5779H12.386L8.16787 9.54449V9.54415Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <a href="https://youtube.com/">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="founder-card">
                            <div class="founder-card-img">
                                <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/jimmy.png')); ?>"
                                    alt="img">
                            </div>
                            <div class="founder-card-details">
                                <h3 class="founder-card-title">William Xeno</h3>
                                <p class="founder-card-desig">Founder & CEO</p>
                                <div class="social-btn">
                                    <a href="https://www.linkedin.com/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M10.0596 7.34522L15.8879 0.570312H14.5068L9.44607 6.45287L5.40411 0.570312H0.742188L6.85442 9.46578L0.742188 16.5703H2.12338L7.4676 10.3581L11.7362 16.5703H16.3981L10.0593 7.34522H10.0596ZM8.16787 9.54415L7.54857 8.65836L2.62104 1.61005H4.74248L8.71905 7.29827L9.33834 8.18405L14.5074 15.5779H12.386L8.16787 9.54449V9.54415Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <a href="https://youtube.com/">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <div class="team-tab-btn filter-menu-active">
                            <button data-filter=".cat2" type="button">Management Team</button>
                            <button data-filter=".cat3" type="button">Marketing Team</button>
                        </div>
                    </div>
                    <div class="filter-active-cat1">
                        <div class="team-tab-content filter-item cat1">
                            <ul class="team-tab-list">
                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-1.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Jacob Jones</a></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-2.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Jimmy</a></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-3.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Martin</a></h3>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-4.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Julie</a></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-5.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Daniel</a></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-card">
                                        <div class="team-card_img">
                                            <img
                                                src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/team/team-1-6.png')); ?>">
                                            <div class="social-btn">
                                                <a href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="team-card_content">
                                            <h3 class="team-card_title"><a href="#">Sofie</a></h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                        Partner Area
                                        ==============================-->
    <div class="pt-130 bg-black2" id="testimonials">
        <div class="container">
            <div class="section-title text-center mb-50">
                <?php
                    $content = content('testimonial.content');
                    $elements = element('testimonial.element');

                ?>
                <h2 class="title style2"><?php echo e(__(@$content->data->title)); ?></h2>
            </div>
            <div class="slider-area">
                <div class="row partner-slider1">
                    <?php $__empty_1 = true; $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-4">
                            <div class="partner-card">
                                <h5 class="name"><?php echo e(@$element->data->client_name); ?></h5>
                                <p><?php echo e(@$element->data->designation); ?></p>
                                <p class="mt-4"><?php echo e(@$element->data->answer); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-130 pb-140 bg-black2 overflow-hidden position-relative z-index-common">
        <div class="bg-gradient-4">
            <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-2.jpg')); ?>" alt="img">
        </div>
        <!--==============================
                                            Event Area
                                            ==============================-->
        <div class="event-area">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2 class="title style2">Join Events for meet us</h2>
                </div>
                <div class="row gy-60 gx-30 justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-1.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">BlockVienna</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Venna
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        August 17, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-2.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Summit Summits</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        USA
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        June 12, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-3.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Blockchain Summit</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        America
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        July 05, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-4.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Economy ICO 2024</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Costa Rica
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        September 09, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-5.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Blockchain summit</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Brazil
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        September 14, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-6.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Blockchain & bitcoin</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Argentina
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        August 14, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-7.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Money conference</a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Franch
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        May 24, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="event-card">
                            <div class="event-card-img">
                                <a href="#">
                                    <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/update/event/1-8.png')); ?>">
                                </a>
                            </div>
                            <div class="event-card-content">
                                <h4 class="event-card-title"><a href="contact.html">Crypto Economy </a></h4>
                                <div class="event-meta">
                                    <a href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99895 8.95321C9.1477 8.95321 10.0789 8.02197 10.0789 6.87321C10.0789 5.72446 9.1477 4.79321 7.99895 4.79321C6.85019 4.79321 5.91895 5.72446 5.91895 6.87321C5.91895 8.02197 6.85019 8.95321 7.99895 8.95321Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                            <path
                                                d="M2.41281 5.65992C3.72615 -0.113413 12.2795 -0.106746 13.5861 5.66659C14.3528 9.05325 12.2461 11.9199 10.3995 13.6933C9.05948 14.9866 6.93948 14.9866 5.59281 13.6933C3.75281 11.9199 1.64615 9.04659 2.41281 5.65992Z"
                                                stroke="var(--tg-primary-color)" stroke-width="1.5" />
                                        </svg>
                                        Saudi Arabia
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i>
                                        May 24, 2024
                                    </a>
                                </div>
                                <a href="#" class="btn btn3">
                                    JOIN US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
                                            Press CTA Area
                                            ==============================-->
        
    </div>

    <!--==============================
                                        Faq Area
                                        ==============================-->
    <div class="pt-140 pb-140 overflow-hidden" id="faq">
        <div class="container">
            <div class="row gy-40 justify-content-between">
                <div class="col-xl-4 text-xl-start">
                    <div class="section-title mb-50">
                        <?php
                            $content = content('faq.content');
                            $elements = element('faq.element');
                        ?>

                        <h2 class="title style2"><?php echo e(@$content->data->title); ?></h2>
                        <p class="sec-text">DO have any kind Of questions?
                            We're here to help.</p>
                    </div>
                    <div class="faq-thumb mt-60">
                        <img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/FAQ.png')); ?>"
                            alt="img">
                    </div>
                </div>
                
                <div class="col-xxl-6 col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span
                                        class="number">1</span>Does this software is generating online money</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes With the help of quantum trading bot and you can invest your
                                        money with risk free trading bot that makes your wealth passive and boost your
                                        financial growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2"><span
                                        class="number">2</span>Is there any Team rewards system ?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes you can made upto 20% of your team upto 3 levels and if you
                                        grow your team you can take monthly salary from company and also you upgraded as an
                                        agent plus daily commission from team members profit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3"><span
                                        class="number">3</span>How Do i check my account Balance</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">It is easy to check your account balance our platform provides you
                                        userfriendly interface easy to use and understand everything </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4"><span
                                        class="number">4</span>How many payments gateway are use in this site</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">In the initial stage at this time we are using only USDT/CRYPTO
                                        Gateway.</p>
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
        'use strict';
        $(document).ready(function() {
            $(document).on('click', '#calculate-btn', function() {

                let modal = $('#calculationModal');

                $('.selectplan').text('');
                $('.amount').text('');
                let id = $('#plan').val();
                let amount = $('#amount').val();
                var url = "<?php echo e(route('user.investmentcalculate', ':id')); ?>";
                url = url.replace(':id', id);
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        amount: amount,
                        selectplan: id
                    },
                    success: (data) => {
                        if (data.message) {
                            iziToast.error({
                                message: data.message + ' ' + Number(data.amount)
                                    .toFixed(2),
                                position: 'topRight',
                            });

                        } else {
                            $('#profit').html(data);
                            modal.modal('show');
                        }


                    },
                    error: (error) => {
                        if (typeof(error.responseJSON.errors.amount) !== "undefined") {
                            iziToast.error({
                                message: error.responseJSON.errors.amount,
                                position: 'topRight',
                            });
                        }
                        if (typeof(error.responseJSON.errors.selectplan) !== "undefined") {
                            iziToast.error({
                                message: error.responseJSON.errors.selectplan,
                                position: 'topRight',
                            });
                        }
                    }
                })
            });



        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\core\resources\views/theme4/home.blade.php ENDPATH**/ ?>