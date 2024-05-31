@extends(template() . 'layout.master2')

@push('style')
    <style>
        .activebtn {
            background-color: #ffc451;
        }
    </style>
@endpush

@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Withdraw Log') }}</h5>
                                {{-- <form action="" method="get">
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <input type="text" name="trx" class="form-control form-control-sm"
                                                placeholder="transaction id">
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" class="form-control form-control-sm"
                                                placeholder="Search User" name="date">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn main-btn btn-sm">{{ __('Search') }}</button>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                        </div>

                        <div class="tab-btn-group tab-btn-group w-100 text-end">
                            <a class="tab-btn m-3 text-warning {{ Request::routeIs('user.withdraw.all') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.all') }}">{{ __('All') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>

                            <a class="tab-btn m-3 text-warning {{ Request::routeIs('user.withdraw.pending') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.pending') }}">{{ __('Pending') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>

                            <a class="tab-btn m-3 text-warning {{ Request::routeIs('user.withdraw.complete') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.complete') }}">{{ __('Complete') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>
                        </div>

                        <div class="nk-block nk-block-lg">
                            @forelse ($withdrawlogs as $key => $withdrawlog)
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('TRX') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            {{ $key + $withdrawlogs->firstItem() }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Date') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            {{ __($withdrawlog->created_at->format('d F Y')) }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Method Name') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            {{ __($withdrawlog->withdrawMethod->name) }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Getable Amount') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            {{ $withdrawlog->withdraw_amount }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Charge Type') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            {{ ucwords($withdrawlog->withdrawMethod->charge_type) }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Charge') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            @if ($withdrawlog->withdrawMethod->charge_type == 'percent')
                                                {{ ($withdrawlog->withdraw_amount * $withdrawlog->withdraw_charge) / 100 . ' ' . $general->site_currency }}
                                            @else
                                                {{ number_format($withdrawlog->withdraw_charge, 2) . ' ' . @$general->site_currency }}
                                            @endif
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('status') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            @if ($withdrawlog->status == 1)
                                                <span class="sp_badge sp_badge_success">{{ __('Success') }}</span>
                                            @elseif($withdrawlog->status == 2)
                                                <span class="sp_badge sp_badge_danger">{{ __('Rejected') }}</span>
                                            @else
                                                <span class="sp_badge sp_badge_warning">{{ __('Pending') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            {{ __('Action') }}
                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <button class="btn mt-0 details" style="font-size: 9px;"
                                                data-user_data="{{ json_encode($withdrawlog->user_withdraw_prof) }}"
                                                data-withdraw="{{ $withdrawlog }}">View</button>
                                        </p>
                                    </div>
                                </div>
                            @empty
                                {{ __('No Data Found') }}
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal w-100 bg-transparent shadow-none fade" id="details" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content p-0">
                    <div class="modal-header bg-dark p-2">
                        <h5 class="modal-title">{{ __('Withdraw Details') }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark p-2">
                        <div class="withdraw-details">
                        </div>
                    </div>
                    <div class="modal-footer bg-dark p-2">
                        <button type="button" class="btn m-0 bg-dark text-success"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @push('script')
        <script>
            $(function() {
                'use strict'

                $('.details').on('click', function() {
                    const modal = $('#details');

                    let html = `

                    <ul class="list-group ">
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                               {{ __('Withdraw Email') }}
                                <span>${$(this).data('user_data').email}</span>
                            </li>
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Withdraw Account Information') }}
                                <span>${$(this).data('user_data').account_information}</span>
                            </li>


                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Note For Withdraw') }}
                                <span>${$(this).data('user_data').note}</span>
                            </li>

                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Withdraw Transaction') }}
                                <span>${$(this).data('withdraw').transaction_id}</span>
                            </li>
                        </ul>
                `;

                    modal.find('.withdraw-details').html(html);

                    modal.modal('show');
                })

            })
        </script>
    @endpush
