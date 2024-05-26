@extends(template() . 'layout.auth')

@push('seo')
    <meta name='description' content="{{ @$general->seo_description }}">
@endpush
@section('content')
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    {{-- <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div> --}}
                    <div class="nk-block nk-block-middle nk-auth-body">
                        {{-- <div class="brand-logo pb-2"><a href="/" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div> --}}
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Sign-In</h5>
                                <div class="nk-block-des">
                                    <p>Access the Quantum Trade AI panel using your email and passcode.</p>
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
