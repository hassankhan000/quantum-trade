@extends(template() . 'layout.master2')


@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Trasaction Log') }}</h5>
                                {{-- <form action="" method="get">
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <input type="text" name="trx" class="form-control form-control-sm" placeholder="transaction id">
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" class="form-control form-control-sm" placeholder="Search User" name="date">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn main-btn btn-sm">{{__('Search')}}</button>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            @forelse($transactions as $key => $transaction)
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Trx') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->trx }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('User') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->user->fname . ' ' . $transaction->user->lname }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Gateway') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->gateway->gateway_name ?? 'Account Transfer' }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Amount') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->amount }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Currency') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->currency }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Charge') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->charge . ' ' . $transaction->currency }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Details') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->details }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Payment Date') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $transaction->created_at->format('Y-m-d') }}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                {{ __('No Transaction Found') }}
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
