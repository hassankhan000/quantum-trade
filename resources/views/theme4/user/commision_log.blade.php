@extends(template() . 'layout.master2')


@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2">{{ __('Referral Log') }}</h5>
                                {{-- <form action="" method="get" class="d-inline-flex">
                    <input type="date" class="form-control form-control-sm me-3" placeholder="Search User" name="date">
                    <button type="submit" class="btn main-btn btn-sm">{{__('Search')}}</button>
                </form> --}}
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            @forelse ($commison as $item)
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Commison From') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ @$item->commissionFrom->username }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Amount') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ number_format($item->amount, 2) }}
                                            {{ @$general->site_currency }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Return Details') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $item->purpouse }}
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ __('Commision Date') }}
                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            {{ $item->created_at->format('y-m-d') }}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                {{ __('No Data Found') }}</td>
                            @endforelse
                            {{ $commison->links('backend.partial.paginate') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
