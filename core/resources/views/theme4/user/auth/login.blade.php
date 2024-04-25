@extends(template() . 'layout.auth')

@push('seo')
    <meta name='description' content="{{ @$general->seo_description }}">
@endpush
@section('content')
    {{-- <section class="auth-section">
        <div class="auth-wrapper">
            <div class="auth-top-part">
                <a href="{{ route('home') }}" class="auth-logo">
                    <img class="img-fluid rounded sm-device-img text-align" src="{{ getFile('logo', @$general->whitelogo) }}"
                        width="100%" alt="pp">
                </a>
                <p class="mb-0"><span class="me-2">{{ __('Haven\'t an Account?') }}</span> <a class="btn main-btn btn-sm" href="{{ route('user.register') }}">{{ __('Register') }}</a></p>
            </div>
            <div class="auth-body-part">
                <div class="auth-form-wrapper">
                    <h3 class="text-center mb-4">{{ __('Login Your Account') }}</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput">{{ __('Email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"
                                placeholder="{{ __('Enter Your Email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput">{{ __('Pasword') }}</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="{{ __('Enter Password') }}">
                        </div>
                        <p class="text-end"><a href="{{ route('user.forgot.password') }}"
                                class="sp_text_dark">{{ __('Forget password?') }}</a></p>
                        @if (@$general->allow_recaptcha == 1)
                            <div class="col-md-12 my-3">
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                    data-callback="verifyCaptcha"></div>
                                <div id="g-recaptcha-error"></div>
                            </div>
                        @endif
                        <button class="btn main-btn w-100 mt-3" type="submit"> <span>{{ __('Log In') }} </span></button>
                    </form>
                </div>
            </div>
            <div class="auth-footer-part">
                <p class="text-center mb-0">
                    @if (@$general->copyright)
                        {{ __(@$general->copyright) }}
                    @endif
                </p>
            </div>
        </div>
        <div class="auth-thumb-area" style="background-image: url('{{ asset('asset/theme3/images/bg/plan.jpg') }}')">
            <div class="auth-thumb">
                <img src="{{ getFile('frontendlogin', @$general->frontend_login_image) }}" alt="image">
            </div>
        </div>
    </section> --}}
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-5"><a href="/" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Sign-In</h5>
                                <div class="nk-block-des">
                                    <p>Access the DashLite panel using your email and passcode.</p>
                                </div>
                            </div>
                        </div>
                        <form action="" class="form-validate is-alter" autocomplete="off" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label" for="email-address">Email</label><a
                                        class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                </div>
                                <div class="form-control-wrap"><input autocomplete="off" type="email" name="email"
                                        value="{{ old('email') }}" class="form-control form-control-lg" id="email-address"
                                        placeholder="Enter your email address"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label" for="password">Password</label><a
                                        class="link link-primary link-sm" tabindex="-1"
                                        href="{{ route('user.forgot.password') }}">Forgot
                                        Password?</a></div>
                                <div class="form-control-wrap"><a tabindex="-1" href="#"
                                        class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>
                                    <input autocomplete="new-password" type="password" class="form-control form-control-lg"
                                        id="password" name="password" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                    type="submit">{{ __('Log In') }}</button></div>
                        </form>
                        <div class="form-note-s2 pt-4"> New on our platform? <a href="{{ route('user.register') }}">Create
                                an account</a></div>
                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="nk-block-between">
                            <ul class="nav nav-sm">
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Terms &
                                        Condition</a></li>
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Privacy
                                        Policy</a></li>
                                <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3"
                                        href="#">Help</a></li>
                                <li class="nav-item dropup"><a
                                        class="dropdown-toggle dropdown-indicator has-indicator link link-primary fw-normal py-2 px-3"
                                        data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/english.png" alt=""
                                                        class="language-flag"><span class="language-name">English</span></a>
                                            </li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/spanish.png" alt=""
                                                        class="language-flag"><span class="language-name">Español</span></a>
                                            </li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/french.png" alt=""
                                                        class="language-flag"><span
                                                        class="language-name">Français</span></a></li>
                                            <li><a href="#" class="language-item"><img
                                                        src="../../images/flags/turkey.png" alt=""
                                                        class="language-flag"><span
                                                        class="language-name">Türkçe</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <p>&copy; 2023 DashLite. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                            srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-b.png"
                                            srcset="/demo6/images/slides/promo-b2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="nk-feature nk-feature-center">
                                    <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-c.png"
                                            srcset="/demo6/images/slides/promo-c2x.png 2x" alt=""></div>
                                    <div class="nk-feature-content py-4 p-sm-5">
                                        <h4>Dashlite</h4>
                                        <p>You can start to create your products easily with its user-friendly
                                            design & most completed responsive layout.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-dots"></div>
                        <div class="slider-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='sp_text_danger'>@changeLang('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
@endpush
