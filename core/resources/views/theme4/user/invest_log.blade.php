@extends(template() . 'layout.master2')


@section('content2')
    <script>
        'use strict'


        function firePayment(elementId) {
            $.ajax({
                url: "{{ route('returninterest') }}",
                method: "GET",
                success: function(response) {
                    if (response) {
                        document.getElementById(elementId).innerHTML = "COMPLETE";
                        return
                    }
                    window.location.href = "{{ url()->current() }}"
                }
            })
        }




        function getCountDown(elementId, seconds) {
            var times = seconds;

            var x = setInterval(function() {
                var distance = times * 1000;

                if (distance < 0) {
                    clearInterval(x);
                    firePayment(elementId);
                    return
                }
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML = days + "d " + hours + "h " + minutes + "m " +
                    seconds + "s ";
                times--;
            }, 1000);
        }
    </script>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Investment Log') }}</h5>
                                <form action="" method="get" class="d-inline-flex">
                                    <input type="text" name="trx" class="form-control form-control-sm me-2"
                                        placeholder="transaction id">
                                    <input type="date" class="form-control form-control-sm me-3"
                                        placeholder="Search User" name="date">
                                    <button type="submit" class="btn main-btn btn-sm">{{ __('Search') }}</button>
                                </form>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div style="overflow: auto;" class="card card-bordered card-preview">
                                <div class="card-inner">
                                    {{-- <table class="table site-table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Trade ID') }}</th>
                                                <th>{{ __('Amount') }}</th>
                                                <th>{{ __('Currency') }}</th>
                                                <th>{{ __('Date') }}</th>
                                                <th>{{ __('Initial Pair Price') }}</th>
                                                <th>{{ __('Ending Pair Price') }}</th>
                                                <th>{{ __('Trading Pair') }}</th>
                                                <th>{{ __('Profit Amount') }}</th>
                                                <th>{{ __('Boot Fee') }}</th>
                                                <th>{{ __('Upcoming Payment') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse($transactions as $key => $transaction)
                                                <tr>
                                                    <td data-caption="{{ __('Trx') }}">
                                                        {{ $transaction->transaction_id }}</td>
                                                  
                                                    <td data-caption="{{ __('Amount') }}">{{ $transaction->amount }}</td>
                                                    <td data-caption="{{ __('Currency') }}">
                                                        @if ($transaction->gateway_id == 0)
                                                            {{ $general->site_currency }}
                                                        @else
                                                            {{ $transaction->gateway->gateway_parameters->gateway_currency }}
                                                        @endif

                                                    </td>
                                                    <td data-caption="{{ __('Payment Date') }}">
                                                        {{ $transaction->created_at->format('Y-m-d') }}
                                                    </td>
                                                    <td data-caption="{{ __('Initial Pair Price') }}">
                                                        {{ $transaction->pair_price }}
                                                    </td>
                                                    <td data-caption="{{ __('Ending Pair Price') }}">
                                                        @if ($transaction->next_payment_date == null)
                                                            {{ $transaction->pair_price * 1.002 }}
                                                        @endif
                                                    </td>
                                                    <td data-caption="{{ __('Pair Name') }}">
                                                        {{ $transaction->pair_name }}
                                                    </td>
                                                    <td data-caption="{{ __('profit amount') }}">
                                                        {{ $transaction->interest_amount - ($transaction->interest_amount * 0.005) }}%
                                                    </td>
                                                    <td data-caption="{{ __('Boot Fee') }}">
                                                        {{ $transaction->interest_amount * 0.005 }}%
                                                    </td>
                                                    <td data-caption="{{ __('Upcoming Payment') }}">
                                                        <p id="count_{{ $loop->iteration }}" class="mb-2">
                                                            @if ($transaction->next_payment_date == null)
                                                                {{ __('Complete') }}
                                                            @endif
                                                        </p>
                                                        <script>
                                                            @if ($transaction->next_payment_date != null)
                                                                getCountDown("count_{{ $loop->iteration }}",
                                                                    "{{ now()->gt($transaction->next_payment_date) ? 0 : now()->diffInSeconds($transaction->next_payment_date) }}"
                                                                )
                                                            @endif
                                                        </script>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="100%">
                                                        {{ __('No Invest Found') }}
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="dashboard-body-part">
        <div class="mobile-page-header">
            <h5 class="title">{{ __('Investment History') }}</h5>
            <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i> {{ __('Back') }}</a>
        </div>

        <div class="site-card">
            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                <h5 class="mb-sm-0 mb-2">{{ __('Investment Log') }}</h5>
                <form action="" method="get" class="d-inline-flex">
                    <input type="text" name="trx" class="form-control form-control-sm me-2" placeholder="transaction id">
                    <input type="date" class="form-control form-control-sm me-3" placeholder="Search User" name="date">
                    <button type="submit" class="btn main-btn btn-sm">{{__('Search')}}</button>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table site-table">
                        <thead>
                            <tr>
                                <th>{{ __('Trx') }}</th>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Gateway') }}</th>
                                <th>{{ __('Amount') }}</th>
                                <th>{{ __('Currency') }}</th>
                                <th>{{ __('Charge') }}</th>
                                <th>{{ __('Payment Date') }}</th>
                                <th>{{ __('Upcoming Payment') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($transactions as $key => $transaction)
                                <tr>
                                    <td data-caption="{{ __('Trx') }}">{{ $transaction->transaction_id }}</td>
                                    <td data-caption="{{ __('User') }}">
                                        {{ @$transaction->user->fname . ' ' . @$transaction->user->lname }}</td>
                                    <td data-caption="{{ __('Gateway') }}">
                                        @if ($transaction->gateway_id == 0)
                                            {{ __('Invest Using Balance') }}
                                        @else
                                            {{ @$transaction->gateway->gateway_name ?? 'Account Transfer' }}
                                        @endif
                                    </td>
                                    <td data-caption="{{ __('Amount') }}">{{ $transaction->amount }}</td>
                                    <td data-caption="{{ __('Currency') }}">
                                        @if ($transaction->gateway_id == 0)
                                            {{ $general->site_currency }}
                                        @else
                                            {{ $transaction->gateway->gateway_parameters->gateway_currency }}
                                        @endif

                                    </td>
                                    <td data-caption="{{ __('Charge') }}">
                                        {{ $transaction->charge . ' ' . $transaction->currency }}</td>

                                    <td data-caption="{{ __('Payment Date') }}">{{ $transaction->created_at->format('Y-m-d') }}
                                    </td>
                                    <td data-caption="{{ __('Upcoming Payment') }}">
                                        <p id="count_{{ $loop->iteration }}" class="mb-2">
                                            @if ($transaction->next_payment_date == null)
                                             {{__('Complete')}}
                                            @endif
                                        </p>
                                        <script>
                                            @if ($transaction->next_payment_date != null)
                                                getCountDown("count_{{ $loop->iteration }}",
                                                    "{{ now()->gt($transaction->next_payment_date) ? 0 : now()->diffInSeconds($transaction->next_payment_date) }}"
                                                    )
                                            @endif
                                        </script>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="100%">
                                        {{ __('No Invest Found') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    @if ($transactions->hasPages())
                        {{ $transactions->links() }}
                    @endif

                </div>
            </div>
        </div>
    </div> --}}
    @endsection
