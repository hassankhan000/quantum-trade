@extends(template() . 'layout.master2')


@section('content2')
    {{-- <div class="dashboard-body-part">

        <div class="mobile-page-header">
            <h5 class="title">{{ __('Money Transfer History') }}</h5>
            <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i> {{ __('Back') }}</a>
        </div>

        <div class="site-card">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h5 class="mb-sm-0 mb-2">{{ __('Money Transfer Log') }}</h5>
                <form action="" method="get">
                    <div class="row g-3">
                        <div class="col-auto">
                            <input type="text" name="trx" class="form-control form-control-sm" placeholder="transaction id">
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control form-control-sm" placeholder="Search User" name="date">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn main-btn btn-sm">{{ __('Search') }}</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body text-end">

                <div class="table-responsive">
                    <table class="table site-table">
                        <thead>
                            <tr>
                                <th>{{ __('Trx') }}</th>
                                <th>{{ __('Sender') }}</th>
                                <th>{{ __('Receiver') }}</th>
                                <th>{{ __('Amount') }}</th>
                                <th>{{ __('Currency') }}</th>
                                <th>{{ __('Charge') }}</th>
                                <th>{{ __('Details') }}</th>
                                <th>{{ __('Payment Date') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($transfers as $key => $transaction)
                                <tr>
                                    <td data-caption="{{ __('Trx') }}">{{ $transaction->transaction_id }}</td>

                                    <td data-caption="{{ __('Sender') }}">
                                        <p class="p-0 m-0">
                                            Name : {{ $transaction->sender->full_name }}
                                        </p>
                                        <p class="p-0 m-0">
                                            Email : {{ $transaction->sender->email }}
                                        </p>
                                    </td>

                                    <td data-caption="{{ __('Receiver') }}">
                                        <p class="p-0 m-0">
                                            Name : {{ $transaction->receiver->full_name }}
                                        </p>
                                        <p class="p-0 m-0">
                                            Email : {{ $transaction->receiver->email }}
                                        </p>
                                    </td>

                                    <td data-caption="{{ __('Amount') }}">{{ number_format($transaction->amount, 2) }}
                                    </td>
                                    <td data-caption="{{ __('Currency') }}">{{ $general->site_currency }}</td>
                                    <td data-caption="{{ __('Charge') }}">
                                        {{ number_format($transaction->charge, 2) . ' ' . $general->site_currency }}</td>
                                    <td data-caption="{{ __('Details') }}">{{ $transaction->details }}</td>
                                    <td data-caption="{{ __('Payment Date') }}">
                                        {{ $transaction->created_at->format('Y-m-d') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center no-data-table" colspan="100%">
                                        {{ __('No Transaction Found') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    @if ($transfers->hasPages())
                        {{ $transfers->links() }}
                    @endif
                </div>
            </div>

        </div>

    </div> --}}

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Money transfer history') }}</h5>
                                <form action="" method="get">
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
                                </form>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div style="overflow: auto;" class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="table site-table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Trx') }}</th>
                                                <th>{{ __('Sender') }}</th>
                                                <th>{{ __('Receiver') }}</th>
                                                <th>{{ __('Amount') }}</th>
                                                <th>{{ __('Currency') }}</th>
                                                <th>{{ __('Charge') }}</th>
                                                <th>{{ __('Details') }}</th>
                                                <th>{{ __('Payment Date') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse($transfers as $key => $transaction)
                                                <tr>
                                                    <td data-caption="{{ __('Trx') }}">
                                                        {{ $transaction->transaction_id }}</td>

                                                    <td data-caption="{{ __('Sender') }}">
                                                        <p class="p-0 m-0">
                                                            Name : {{ $transaction->sender->full_name }}
                                                        </p>
                                                        <p class="p-0 m-0">
                                                            Email : {{ $transaction->sender->email }}
                                                        </p>
                                                    </td>

                                                    <td data-caption="{{ __('Receiver') }}">
                                                        <p class="p-0 m-0">
                                                            Name : {{ $transaction->receiver->full_name }}
                                                        </p>
                                                        <p class="p-0 m-0">
                                                            Email : {{ $transaction->receiver->email }}
                                                        </p>
                                                    </td>

                                                    <td data-caption="{{ __('Amount') }}">
                                                        {{ number_format($transaction->amount, 2) }}
                                                    </td>
                                                    <td data-caption="{{ __('Currency') }}">{{ $general->site_currency }}
                                                    </td>
                                                    <td data-caption="{{ __('Charge') }}">
                                                        {{ number_format($transaction->charge, 2) . ' ' . $general->site_currency }}
                                                    </td>
                                                    <td data-caption="{{ __('Details') }}">{{ $transaction->details }}
                                                    </td>
                                                    <td data-caption="{{ __('Payment Date') }}">
                                                        {{ $transaction->created_at->format('Y-m-d') }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center no-data-table" colspan="100%">
                                                        {{ __('No Transaction Found') }}
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    @if ($transfers->hasPages())
                                        {{ $transfers->links() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
