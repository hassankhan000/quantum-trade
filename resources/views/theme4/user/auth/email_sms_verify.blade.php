@extends(template() . 'layout.auth')
@php

    $content = content('breadcrumb.content');

@endphp

@section('content')
    @push('seo')
        <meta name='description' content="{{ @$general->seo_description }}">
    @endpush

    {{-- <section class="auth-section">
        <div class="auth-wrapper">
            <div class="auth-top-part">
                <a href="{{ route('home') }}" class="auth-logo w-100 text-center">
                    <img class="img-fluid rounded sm-device-img text-align" src="{{ getFile('logo', @$general->whitelogo) }}"
                        width="100%" alt="logo">
                </a>
            </div>

            <div class="auth-body-part">
                <div class="auth-form-wrapper">
                    @if ($general->is_email_verification_on && !auth()->user()->ev)
                        <h3 class="text-center mb-4">{{ __('Verify Email') }}</h3>
                        <form class="reg-form" action="{{route('user.authentication.verify.email')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput"> {{ __('Verification Code') }}</label>
                                <input type="text" name="code" class="form-control"
                                    placeholder="{{ __('Enter Verification Code') }}">
                            </div>
                            @if (@$general->allow_recaptcha)
                                <div class="mb-3">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                        data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            @endif
                            <button class="btn main-btn w-100" type="submit"> {{ __('Verify Now') }} </button>
                        </form>
                    @elseif($general->is_sms_verification_on && !auth()->user()->sv)


                        <form method="POST" action="{{ route('user.authentication.verify.sms') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">{{ __('Sms Verify Code') }}</label>
                                <input type="text" name="code" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>

                            <button type="submit"
                                class="btn main-btn w-100"><span>{{ __('Verify Now') }}</span></button>

                        </form>
                    @endif
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
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-2"><a href="/" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div>
                        @if ($general->is_email_verification_on && !auth()->user()->ev)
                            <div class="nk-block-head">
                                <h5 class="text-center mb-4">{{ __('Verify Email') }}</h5>
                            </div>
                            <form class="reg-form" action="{{ route('user.authentication.verify.email') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Verification Code') }}</label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code"
                                            placeholder="{{ __('Enter Verification Code') }}"></div>
                                </div>
                                @if (@$general->allow_recaptcha)
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                @endif
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit">{{ __('Verify Now') }}</button></div>
                            </form>
                        @elseif($general->is_sms_verification_on && !auth()->user()->sv)
                            <form method="POST" action="{{ route('user.authentication.verify.sms') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Sms Verify Code') }}</label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"></div>
                                </div>
                                @if (@$general->allow_recaptcha)
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                @endif
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit">{{ __('Verify Now') }}</button></div>
                            </form>
                            @endif
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>Quantum</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
