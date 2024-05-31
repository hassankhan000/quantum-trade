@extends(template() . 'layout.master2')


@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head">
                                <h5 class="text-start text-light mb-4">{{ __('Request For Reset Password') }}</h5>
                            </div>
                            <form action="{{ route('user.update.password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Old Password') }}</label></div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="oldpassword"
                                            placeholder="{{ __('Enter Old Password') }}"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('New Password') }}</label></div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="password"
                                            placeholder="{{ __('Enter New Password') }}"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Confirm Password') }}</label>
                                    </div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="password_confirmation"
                                            placeholder="{{ __('Confirm Password') }}"></div>
                                </div>
                                <div class="form-group"><button class="btn bg-warning text-dark mt-3"
                                        type="submit">{{ __('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
