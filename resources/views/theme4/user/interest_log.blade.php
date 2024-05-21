@extends(template() . 'layout.master2')
<style>
    table {
        background: #232721 !important;
        border-radius: 13px !important;
    }

    td, th{
        padding: 0 !important;
    }

    .itemtext {
        color: #aef32d !important;
        font-size: 10px !important;
        padding: 10px !important;
    }

    .tableitem {
        padding: 0 !important;
    }

    .nk-content.nk-content-fluid{
    background: #293f00 !important; 
}
    .loader7 {
        width: auto;
        height: 16px;
        border: 1px solid #a6ff0052;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        background: #c8c8c800;
        margin: 0;
    }

    .loader7::after,
    .loader7::before {
        content: " ";
        position: absolute;
        height: 100%;
        left: 0;
        width: 10px;
        z-index: 1;
        background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
    }

    .loader7::after {
        left: auto;
        right: 0;
        background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
    }

    .loader7>span {
        content: " ";
        top: 0;
        z-index: 3;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 1px #ffffff00 inset;
        position: absolute;
    }

    .loader7>span:before {
        content: " ";
        top: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background: transparent;
    }

    .greenlight {
        width: 120px;
        top: -50%;
        height: 250%;
        position: absolute;
        animation: greenglow 3s linear infinite;
        -webkit-animation: greenglow 3s linear infinite;
        z-index: 2;
        mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 0) 100%);
        background: rgba(0, 219, 49, 1);
    }

    @keyframes greenglow {
        from {
            left: -120px;
        }

        to {
            left: 100%;
        }
    }
</style>

@section('content2')
    {{-- <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title">{{ __('Interest History') }}</h5>
            <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i> {{ __('Back') }}</a>
        </div>

        <div class="site-card">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h5 class="mb-sm-0 mb-2">{{ __('Interest Log') }}</h5>
                <form action="" method="get" class="d-inline-flex">
                    <input type="date" class="form-control form-control-sm me-3" placeholder="Search User" name="date">
                    <button type="submit" class="btn main-btn btn-sm">{{ __('Search') }}</button>
                </form>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table site-table">
                        <thead>
                            <tr class="bg-yellow">
                                <th>{{ __('Plan Name') }}</th>
                                <th>{{ __('Interest') }}</th>
                                <th>{{ __('Invest Amount') }}</th>
                                <th>{{ __('Payment Date') }}</th>
                                <th>{{ __('Next Payment Date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($interestLogs as $log)
                                <tr>
                                    <td data-caption="{{ __('Plan Name') }}">{{ $log->payment->plan->plan_name }}</td>
                                    <td data-caption="{{ __('Interest') }}">{{ number_format($log->interest_amount, 2) }}
                                        {{ @$general->site_currency }}</td>
                                    <td data-caption="{{ __('Invest Amount') }}">{{ number_format($log->payment->amount, 2) }}
                                        {{ @$general->site_currency }}</td>
                                    <td data-caption="{{ __('Payment Date') }}">{{ $log->created_at }}</td>
                                    <td data-caption="{{ __('Next Payment Date') }}">
                                        {{ isset($log->payment->next_payment_date) ? $log->payment->next_payment_date : 'Plan Expired' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center no-data-table" colspan="100%">{{ __('No Data Found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                            <h5 class="mb-sm-0 mb-2 text-light">{{ __('Trade Profit Log') }}</h5>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="row">
                                @forelse ($interestLogs as $log)
                                    <table class="my-1">
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    {{ __('BOT NAME') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    {{ $log->payment->plan->plan_name }}
                                            </td>
                                            </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    {{ __('Profit') }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($log->payment->next_payment_date)
                                                    <div class="loader7">
                                                        <span></span>
                                                        <div class="greenlight"></div>
                                                    </div>
                                                @else
                                                    <p class="itemtext">
                                                        {{ number_format($log->interest_amount, 2) }}
                                                        {{ @$general->site_currency }}
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    {{ __('Initial Trade Amount') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    {{ number_format($log->payment->amount, 2) }}
                                                    {{ @$general->site_currency }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    {{ __('Trade Start Date') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    {{ $log->created_at }}

                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    {{ __('Trade Status') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    {{ isset($log->payment->next_payment_date) ? $log->payment->next_payment_date : 'Plan Expired' }}

                                                </p>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center no-data-table" colspan="100%">
                                                {{ __('No Data Found') }}</td>
                                        </tr>
                                    </table>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    {{-- @if ($interestLogs->hasPages())
                        {{ $interestLogs->links() }}
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
