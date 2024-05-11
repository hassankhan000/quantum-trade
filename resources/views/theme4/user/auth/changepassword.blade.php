@extends(template() . 'layout.master2')


@section('content2')
    {{-- <div class="dashboard-body-part">
        <div class="mobile-page-header">
            <h5 class="title">{{ __('Password') }}</h5>
            <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i> {{ __('Back') }}</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-xxl-6 xol-xl-8">
                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Change Password') }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update.password') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="mt-2 mb-2">{{ __('Old Password') }}</label>
                                <input type="password" class="form-control" name="oldpassword"
                                    placeholder="{{ __('Enter Old Password') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="mt-2 mb-2">{{ __('New Password') }}</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="{{ __('Enter New Password') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="mt-2 mb-2">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="{{ __('Confirm Password') }}">
                            </div>
                            <div class="row mt-4">
                                <div class="col-xs-12 d-grid gap-2">
                                    <button class="btn main-btn w-100" type="submit"><span>{{ __('Update') }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    {{-- <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div> --}}
                    <div class="nk-block nk-block-middle nk-auth-body">
                        {{-- <div class="brand-logo pb-2"><a href="../../index-2.html" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" /> --}}
                            </a></div>
                        <div class="nk-block-head">
                            <h5 class="text-center mb-4">{{ __('Request For Reset Password') }}</h5>
                        </div>
                        <form action="{{ route('user.update.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01">{{ __('Old Password') }}</label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="oldpassword" placeholder="{{ __('Enter Old Password') }}"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01">{{ __('New Password') }}</label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="password" placeholder="{{ __('Enter New Password') }}"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01">{{ __('Confirm Password') }}</label></div>
                                <div class="form-control-wrap"><input type="password" class="form-control form-control-lg"
                                        name="password_confirmation" placeholder="{{ __('Confirm Password') }}"></div>
                            </div>
                            <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                    type="submit">{{ __('Update') }}</button></div>
                        </form>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>Dashlite</h4>
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
