@extends(template() . 'layout.master2')

@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">

                                <div class="row g-sm-4 g-3 justify-content-center">
                                    @forelse ($gateways as $gateway)
                                        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6 mt-5">
                                            <div class="payment-box text-center">
                                                <div class="payment-box-thumb">
                                                    <img src="{{ getFile('gateways', $gateway->gateway_image) }}"
                                                        alt="Lights" class="trans-img">
                                                </div>
                                                <div class="payment-box-content">
                                                    <h5 class="title">
                                                        {{ ucwords(str_replace('_', ' ', $gateway->gateway_name)) }}</h5>
                                                    <button data-href="{{ route('user.paynow', $gateway->id) }}"
                                                        data-id="{{ $gateway->id }}"
                                                        class="btn main-btn paynow mt-3 btn-primary"><span>{{ __('Pay Now') }}</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        {{ __('Not Found') }}
                                    @endforelse

                                </div>
                            </div>

                            @if (isset($type) && $type == 'deposit')
                                <div class="modal fade" tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content bg-body">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('Deposit Amount') }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount" class="form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="hidden" name="user_id" class="form-control"
                                                                value="{{ auth()->id() }}">
                                                            <input type="hidden" name="type" class="form-control"
                                                                value="deposit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn sp_btn_danger btn-danger"
                                                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="submit"
                                                        class="btn main-btn btn-primary"><span>{{ __('Deposit Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="modal fade" tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content bg-body">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('Invest Amount') }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount" class="form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="text" name="plan_id" class="form-control"
                                                                value="{{ $plan->id }}" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn sp_btn_danger btn-danger"
                                                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="submit"
                                                        class="btn main-btn btn-primary"><span>{{ __('Invest Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('script')
    <script>
        $(function() {
            'use strict'

            $('.paynow').on('click', function() {
                const modal = $('#paynow')

                modal.find('form').attr('action', $(this).data('href'))
                modal.find('input[name=id]').val($(this).data('id'))

                modal.modal('show')
            })
        })
    </script>
@endpush
