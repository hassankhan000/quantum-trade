@extends(template() . 'layout.master2')


@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header px-0 d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Deposit Logs') }}</h5>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            @forelse($transactions as $key => $transaction)
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Trx') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->transaction_id }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('User') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ @$transaction->user->fname . ' ' . @$transaction->user->lname }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Gateway') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ @$transaction->gateway->gateway_name ?? 'Account Transfer' }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Amount') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->amount }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Currency') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $general->site_currency }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Charge') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->charge . ' ' . $transaction->currency }}
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Payment Date') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->created_at->format('Y-m-d') }}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                {{ __('No users Found') }}
                            @endforelse
                            @if ($transactions->hasPages())
                                {{ $transactions->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
