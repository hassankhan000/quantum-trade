@extends(template() . 'layout.master2')


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
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Investment Log') }}</h5>
                                <form action="" method="get" class="d-inline-flex">
                                    <input type="date" class="form-control form-control-sm me-3"
                                        placeholder="Search User" name="date">
                                    <button type="submit" class="btn main-btn btn-sm">{{ __('Search') }}</button>
                                </form>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div style="overflow: auto;" class="card card-bordered card-preview">
                                <div class="card-inner">
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
                                                    <td data-caption="{{ __('Plan Name') }}">
                                                        {{ $log->payment->plan->plan_name }}</td>
                                                    <td data-caption="{{ __('Interest') }}">
                                                        {{ number_format($log->interest_amount, 2) }}
                                                        {{ @$general->site_currency }}</td>
                                                    <td data-caption="{{ __('Invest Amount') }}">
                                                        {{ number_format($log->payment->amount, 2) }}
                                                        {{ @$general->site_currency }}</td>
                                                    <td data-caption="{{ __('Payment Date') }}">{{ $log->created_at }}
                                                    </td>
                                                    <td data-caption="{{ __('Next Payment Date') }}">
                                                        {{ isset($log->payment->next_payment_date) ? $log->payment->next_payment_date : 'Plan Expired' }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center no-data-table" colspan="100%">
                                                        {{ __('No Data Found') }}</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

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
