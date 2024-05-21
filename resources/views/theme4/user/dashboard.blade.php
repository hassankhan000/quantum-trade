@extends(template() . 'layout.master2')
<style>
    .nk-content.nk-content-fluid {
        /* background: #282828 !important; */
        background: linear-gradient(#1a1a1a7a, #191917ad), url("https://img.freepik.com/premium-photo/modern-brick-wall_118019-548.jpg?w=360") !important;
        background-size: cover !important;
        background-position: center center;
        background-repeat: no-repeat !important;
        background-attachment: fixed !important;
        padding: 0 0 50px 0;
    }

    .main-card {
        width: 100%;
        height: 100%;
        padding: 20px 20px 1px 20px;
        border-radius: 20px;
        background: rgb(58, 140, 36);
        /* background: linear-gradient(49deg, rgba(58, 140, 36, 1) 50%, rgba(148, 208, 26, 1) 100%); */
        background:
            linear-gradient(90deg, rgb(59 140 36 / 58%) 50%, rgb(147 208 26 / 0%) 100%), url(https://img.freepik.com/free-vector/gradient-wavy-background_23-2149123391.jpg?uid=R75560207&ga=GA1.1.168232131.1695012003&semt=ais);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
    }

    .modal_amount {
        padding: 0 10px !important;
        border: 1px solid #549653 !important;
        width: -webkit-fill-available !important;
        height: auto !important;
        background: #f0f8ff00 !important;
        border-radius: 10px !important;
        margin: 15px 0 0 0 !important;
        font-size: 10px !important;
    }

    .main-card h5 {
        margin-top: 0;
        color: white;
        font-size: 23px;
        font-family: system-ui;
        font-weight: 500;
        width: max-content;
    }

    .main-card h6 {
        margin: 0;
        color: #fff6f6;
        font-size: 12px;
        margin-bottom: 5px;
    }

    .main-card h4 {
        margin: 0;
        color: #aefd23;
        font-size: 22px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .main-card .bell {
        padding: 0px 0px 5px 5px;
        background: #181a14;
        position: absolute;
        top: 0;
        right: 0;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn {
        font-size: 10px !important;
    }

    .main-card .bell img {
        width: 60px;
    }

    .main-card .bell .inner {
        padding: 10px;
        background: #83c31c;
        border-radius: 10px;
    }

    .card {
        background-color: #232323 !important;
        border-radius: 12px !important;
        border: 1px solid #83c31c75 !important;
    }

    .card-amount .amount {
        color: #aefd23 !important;
    }

    .card-amount .amount span {
        color: #ffffff !important;
    }

    .plan-card {
        background: #232323;
        border-radius: 16px;
        padding: 14px;
        margin: 20px 0 30px 0;
        border: 1px solid #7cf94545;
        position: relative;
        background: linear-gradient(#23232300, #23232375), url('https://img.freepik.com/free-vector/abstract-black-shapes-background-design_1017-31904.jpg?t=st=1714650201~exp=1714653801~hmac=0ee725b2266ddda8e091f01c15333da69082853a6a60209cd197b857deb57035&w=740');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .plan-card h4 {
        margin: 0px 0 6px 0;
        color: #7cf945;
        font-weight: 600;
        font-size: 14px;
    }

    .plan-card p {
        color: hsl(0, 0%, 94%);
        font-size: 9px;
        margin-bottom: 6px;
    }

    .plan-card .plan-status {
        background: #fab913;
        color: hsl(128.89deg 55.09% 19.9%);
        position: absolute;
        top: -11px;
        padding: 3px 6px;
        right: 0;
        border-radius: 7px;
        font-size: 9px;
        font-weight: 700;
    }

    button.balance {
        padding: 7px 40px;
        border-radius: 6px;
        margin-top: 3px;
        border: 0;
        width: 100%;
        font-size: 12px;
        font-weight: 500;
        background: #77ec43;
        color: black;
    }

    .plan-rio {
        display: flex;
        align-items: center;
        font-size: 10px;
        padding: 3px;
        background: #fffdda;
        margin: 5px 0px;
        border-radius: 7px;
        width: max-content;
        color: black;
    }

    .plan-rio .plan-amount,
    .plan-rio h6 {
        font-size: 12px;
        font-weight: 600;
        margin: 0;
        padding: 0;
    }

    .plan-rio .plan-amount {
        color: #23742f;
        margin-left: 8px;
    }

    .plan-card h4 span {
        color: #fffdfd;
        text-transform: capitalize;
    }

    .plan-list {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    .plan-list li {
        list-style-type: none;
        background: #23742f;
        margin: 0 5px 5px 0;
        color: white;
        padding: 4px;
        font-size: 9px;
        border-radius: 7px;
    }

    .vip-badge {
        font-size: 10px;
        color: yellow;
        font-weight: 600;
        padding: 1px 6px;
        background: #282828;
        white-space: nowrap;
        border-radius: 8px;
        position: relative;
        top: -2px;
    }

    .nolock {
        display: none;
    }

    .locked {
        display: flex;
        align-items: center;
        justify-content: center;
        height: -webkit-fill-available;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        backdrop-filter: blur(3px);
    }

    .locked img {
        width: 50%;
    }

    .modal-table th,
    .modal-table td {
        font-size: 10px;
    }

    .modal-table-p {
        font-size: 7px;
        color: #919191;
        margin: 11px 4px 0px 4px;
    }

    .payment-loading {
        width: 100%;
        height: 100vh;
        overflow: auto;
        flex-direction: column;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        background: black;
        top: 0;
        left: 0;
        z-index: 9999;
    }

    .payment-loading img {
        color: black;
        margin-top: -125px;
    }

    .payment-loading h4 {
        color: #aefd23;
        margin-top: -90px;
        font-weight: 600;
        font-size: 12px;
    }

    .success-img-wrapper {
        width: 100%;
        height: 100vh;
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        background: #f8f9ff;
        display: flex;
        align-items: center;
        justify-content: center;
        display: none;
    }

    .invest-ov .amount {
        color: #b1b1b1 !important;
    }

    .invest-ov .amount span {
        color: #00ff90 !important;
    }

    .label-dzbd7lyV,
    .js-copyright-label {
        display: none !important;
    }
</style>
<style>
    .tabbedPanels {
        width: 100%;
    }

    .panelContainer {
        background: transparent !important;
        margin-top: 10px;
    }

    .tabs {
        height: auto !important;
        background: transparent !important;
    }

    /* reset ul defaults  */
    .tabs {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* set li properties  */
    .tabs li {
        float: left;
        padding: 0;
        margin: 0;
        text-align: center;
    }

    .table th,
    .table td {
        font-size: 9px !important;
        color: black !important;
    }

    /* all formatting goes inside 'a' */
    .tabs a {
        display: block;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        padding: 3px 8px;
        margin-right: 4px;
        font-size: 10px;
        border: 2px solid #aef32d;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        background-color: #aef32d;
    }

    .tabs a.active {
        border-bottom: 2px solid rgb(255, 255, 255);
        background-color: #fff;
        color: #000;
        font-weight: bold;
    }
</style>
@section('content2')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="row g-gs pt-5">
                            <div class="col-md-4">
                                <div class="main-card">
                                    <div class="bell">
                                        {{-- <div class="inner">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                fill="#fff" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                            </svg>
                                        </div> --}}
                                        <img src="https://static.wixstatic.com/media/e5ffbc_6edfb592c3ae43ba92676ea1198d8901~mv2.gif"
                                            width="100px" class="img-fluid rounded rounded-4" alt="">
                                    </div>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-6">
                                            <h6>Welcome back:)</h6>
                                            <h5>{{ auth()->user()->fname . ' ' . auth()->user()->lname }} <span
                                                    class="vip-badge">VIP
                                                    {{ auth()->user()->vip_status }}</span> </h5>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>
                                    <div class="row mt-5 align-items-end justify-content-center">
                                        <div class="col-6">
                                            <h6 class="fs-4">Balance</h6>
                                            <h4> {{ number_format(auth()->user()->balance, 2) }}
                                                {{ $general->site_currency }}</h4>

                                            <h6 class="fs-4 mt-3">Commission</h6>
                                            <h4 class="fs-6">
                                                @if ($currentDayCommision)
                                                    {{ number_format($currentDayCommision->amount, 2) }}
                                                @else
                                                    0
                                                @endif
                                            </h4>
                                        </div>
                                        <div class="col-6 d-flex flex-column align-items-end justify-content-end">
                                            <h6 class="fs-6 mb-0 text-end d-flex align-items-center mt-4">In Trade Freeze
                                                Amount</h6>
                                            <h6 class="fs-6 mb-0 text-end d-flex align-items-center text-dark mt-4">
                                                @if (isset($currentInvest->amount) == 0)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="red" class="me-2 bi bi-arrow-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="me-2 bi bi-arrow-up-right"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                                    </svg>
                                                @endif
                                                {{ isset($currentInvest->amount) ? number_format($currentInvest->amount, 2) : 0 }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row mt-3 align-items-center justify-content-center">
                                        <div class="col">
                                            <button class="btn btn-dark show-plans w-100">Start Bot</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-light w-100" disabled>End Bot</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <a class="btn bg-warning text-dark w-100" href="{{ url('deposit') }}">Deposit</a>
                            </div>
                            <div class="col-6 mt-2">
                                <a class="btn w-100" href="{{ url('withdraw') }}">Withdraw</a>
                            </div>
                            <div class="col-md-4 plan-wrapper">
                                <span class="text-white fw-bold d-flex align-items-center">CHOOSE WORLD'S BEST quantum
                                    TRADING BOTS
                                    <img style="margin: -8px 0px 0 -2px !important;
                                width: 30px;"
                                        src="https://media0.giphy.com/avatars/HeyAutoHQ/DgfrJNR8oUyv.gif"
                                        class="img-fluid rounded rounded-circle ms-2" alt="">
                                </span>
                                @forelse ($plans as $plan)
                                    @php
                                        $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                                            ->where('user_id', Auth::id())
                                            ->where('next_payment_date', '!=', null)
                                            ->where('payment_status', 1)
                                            ->count();
                                    @endphp
                                    @if ($plan->vip_status <= auth()->user()->vip_status)
                                        <div class="col-xl-4 col-md-6">
                                            <div class="plan-card">
                                                <h4>Welcome To <span>{{ $plan->plan_name }}</span> quantum Trading Bot
                                                </h4>
                                                <p class="">Trade With World's Best quantum Trading Bots</p>
                                                <span class="plan-status">{{ __('Required VIP') }}
                                                    {{ $plan->vip_status }}
                                                </span>
                                                <ul class="plan-list">
                                                    @if ($plan->amount_type == 0)
                                                        <li>
                                                            <span class="caption">{{ __('Minimum') }} </span>
                                                            <span class="details">
                                                                {{ number_format($plan->minimum_amount, 2) . ' ' . @$general->site_currency }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="caption">{{ __('Maximum') }} </span>
                                                            <span class="details">
                                                                {{ number_format($plan->maximum_amount, 2) . ' ' . @$general->site_currency }}</span>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <span class="caption">{{ __('Amount') }} </span>
                                                            <span class="details">
                                                                {{ number_format($plan->amount, 2) . ' ' . @$general->site_currency }}</span>
                                                        </li>
                                                    @endif

                                                    @if ($plan->return_for == 1)
                                                        <li>
                                                            <span class="caption">{{ __('For') }} </span>
                                                            <span class="details"> {{ $plan->how_many_time }}
                                                                {{ __('Times') }}</span>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <span class="caption">{{ __('For') }} </span>
                                                            <span class="details"> {{ __('Lifetime') }}</span>
                                                        </li>
                                                    @endif
                                                    <li>
                                                        <span class="caption">{{ __('EVERY') }} </span>
                                                        <span class="details">{{ $plan->time->name }}</span>
                                                    </li>

                                                    @if ($plan->capital_back == 1)
                                                        <li>
                                                            <span class="caption">{{ __('Capital Back') }} </span>
                                                            <span class="details"> {{ __('YES') }}</span>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <span class="caption">{{ __('Capital Back') }} </span>
                                                            <span class="details"> {{ __('NO') }}</span>
                                                        </li>
                                                    @endif
                                                </ul>

                                                <div class="plan-rio">
                                                    <h6>{{ __('ROI') }}</h6>
                                                    <h6 class="plan-amount">
                                                        {{ number_format($plan->return_interest, 2) }} @if ($plan->interest_status == 'percentage')
                                                            {{ '%' }}
                                                        @else
                                                            {{ @$general->site_currency }}
                                                        @endif
                                                    </h6>
                                                </div>

                                                @if ($plan_exist >= $plan->invest_limit)
                                                    <a class="main-btn plan-btn w-100 disabled" href="#">
                                                        <span>{{ __('Max Limit exceeded') }}</span>
                                                    </a>
                                                @else
                                                    {{-- <a class="main-btn plan-btn w-100"
                                                    href="{{ route('user.gateways', $plan->id) }}">
                                                    <span>{{ __('Invest Now') }}</span>
                                                </a> --}}
                                                    @auth
                                                        @if ($plan->vip_status <= auth()->user()->vip_status)
                                                            <button class="balance btn-light" data-plan="{{ $plan }}"
                                                                data-plan_percentage="{{ number_format($plan->return_interest, 2) }}"
                                                                data-min_amount="{{ number_format($plan->minimum_amount, 2) }}"
                                                                data-max_amount="{{ number_format($plan->maximum_amount, 2) }}"
                                                                data-fix_amount="{{ number_format($plan->amount, 2) }}"
                                                                data-url=""><span>{{ __('Invest') }}</span></button>
                                                        @endif
                                                    @endauth
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                @endforelse
                            </div>
                            {{-- TRAE VIEW --}}
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                    {
                                        "symbols": [{
                                                "proName": "FOREXCOM:SPXUSD",
                                                "title": "S&P 500 Index"
                                            },
                                            {
                                                "proName": "FOREXCOM:NSXUSD",
                                                "title": "US 100 Cash CFD"
                                            },
                                            {
                                                "proName": "FX_IDC:EURUSD",
                                                "title": "EUR to USD"
                                            },
                                            {
                                                "proName": "BITSTAMP:BTCUSD",
                                                "title": "Bitcoin"
                                            },
                                            {
                                                "proName": "BITSTAMP:ETHUSD",
                                                "title": "Ethereum"
                                            },
                                            {
                                                "description": "Solana",
                                                "proName": "BINANCE:SOLUSDT"
                                            },
                                            {
                                                "description": "Shiba Inu",
                                                "proName": "COINBASE:SHIBUSD"
                                            },
                                            {
                                                "description": "XRP",
                                                "proName": "BITSTAMP:XRPUSD"
                                            }
                                        ],
                                        "showSymbolLogo": true,
                                        "isTransparent": false,
                                        "displayMode": "adaptive",
                                        "colorTheme": "dark",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            {{-- TRAE VIEW --}}
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">{{ __('Total Withdraw') }}</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                {{ number_format($withdraw, 2) }}
                                                <span class="currency currency-usd">
                                                    {{ $general->site_currency }}</span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">{{ __('Total Deposit') }}</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">
                                                {{ number_format($totalDeposit, 2) }}
                                                <span class="currency currency-usd">
                                                    {{ $general->site_currency }}</span></span><span
                                                class="change up text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label>{{ __('Your refferal link') }}</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="refer-link" class="form-control text-success copy-text"
                                        value="{{ route('user.register', @Auth::user()->username) }}"
                                        placeholder="referallink.com/refer" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2" readonly>
                                    <button type="button" class="input-group-text copy cmn-btn"
                                        id="basic-addon2">{{ __('Copy') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .modal-backdrop.fade.show {
            display: none;
        }

        @media (max-width: 991px) {
            #header.header-inner-pages {
                display: block;
                background: transparent !important;
                position: absolute;
            }

            .dashboard-body-part {
                padding-top: 80px;
            }
        }

        .sp-referral .single-child {
            padding: 6px 10px;
            border-radius: 5px;
        }

        .sp-referral .single-child+.single-child {
            margin-top: 15px;
        }

        .sp-referral .single-child p {
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .sp-referral .single-child p img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            -o-object-fit: cover;
        }

        .sp-referral .single-child p span {
            width: calc(100% - 35px);
            font-size: 14px;
            padding-left: 10px;
        }

        .sp-referral>.single-child.root-child>p img {
            border: 2px solid #c3c3c3;
        }

        .sub-child-list {
            position: relative;
            padding-left: 35px;
        }

        .sub-child-list::before {
            position: absolute;
            content: '';
            top: 0;
            left: 17px;
            width: 1px;
            height: 100%;
            background-color: #a1a1a1;
        }

        .sub-child-list>.single-child {
            position: relative;
        }

        .sub-child-list>.single-child::before {
            position: absolute;
            content: '';
            left: -18px;
            top: 21px;
            width: 30px;
            height: 5px;
            border-left: 1px solid #a1a1a1;
            border-bottom: 1px solid #a1a1a1;
            border-radius: 0 0 0 5px;
        }

        .sub-child-list>.single-child>p img {
            border: 2px solid #c3c3c3;
        }
    </style>
@endpush

<div class="modal
                                                                                                                            fade
                                                                                                                            bg-transparent"
    id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="invest-form" style="width: 100%;" action="{{ route('user.investmentplan.submit') }}"
            method="post">
            @csrf
            <div class="modal-content p-3">
                <div class="d-flex align-items-baseline justify-content-between">
                    <p class="p-0 m-0">
                        Purchase
                        quantum
                        Bot
                    </p>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="form-group mb-1">
                        <input type="number" placeholder="Enter the amount you want to invest:" name="amount"
                            class="form-control modal_amount">
                        <p class="modal-table-p text-danger modal-error-message"></p>
                        <input type="hidden" name="plan_id" class="form-control">
                        <input type="hidden" name="plan_percentage" class="form-control">
                        <input type="hidden" name="pair_price">
                        <input type="hidden" name="pair_name">
                        <input type="hidden" name="timestamp">
                        <input type="hidden" name="min_pay">
                        <input type="hidden" name="max_pay">
                        <input type="hidden" name="fix_amount">
                    </div>
                    <table class="table mt-3 table-sm table-striped modal-table">
                        <thead>
                            <th>Bot
                                Fee
                            </th>
                            <th>Expected
                                Profit
                            </th>
                        </thead>
                        <tbody>
                            <td class="bot-fee">
                                0.00
                                to
                                0.00
                            </td>
                            <td class="exp-profit">
                                0.00
                                to
                                0.00
                            </td>
                        </tbody>
                        <p class="modal-table-p">
                            In
                            initiating
                            investment,
                            AI
                            bot
                            trading
                            shall
                            commence
                            for
                            a
                            day's
                            duration,
                            entailing
                            profit
                            accrual
                            contingent
                            upon
                            the
                            current
                            valuation
                            of
                            the
                            selected
                            pair,
                            with
                            the
                            invested
                            capital
                            remaining
                            non-refundable
                            and
                            non-withdrawable
                            thereafter.
                        </p>
                    </table>
                </div>
                <button class="btn btn-light submit-payment w-auto"><span>{{ __('Invest Now') }}</span></button>
            </div>
        </form>
    </div>
</div>

<div class="payment-loading">
    <img src="https://cdn.dribbble.com/userupload/10543014/file/original-4703d0ba72b72f87fa49a618a24a1f6d.gif"
        class="img-fluid" alt="">
    <h4>Loading...
    </h4>
</div>
<div class="success-img-wrapper">
    <img src="https://cdn.dribbble.com/users/5338201/screenshots/13804672/media/ce7ee9f720a36ac1a2782c79dc8f5728.gif"
        class="img-fluid success-img" alt="">
</div>

@push('script')
    <script>
        $(function() {
            'use strict'
            $('.balance').on('click', function() {
                const modal = $('#invest');
                modal.find('input[name=plan_id]').val($(this).data('plan').id);
                modal.find('input[name=plan_percentage]').val($(this).data('plan_percentage'));
                modal.find('input[name=min_pay]').val($(this).data('min_amount'));
                modal.find('input[name=max_pay]').val($(this).data('max_amount'));
                modal.find('input[name=fix_amount]').val($(this).data('fix_amount'));
                modal.modal('show')
            })
        })
    </script>
    <script>
        'use strict';

        $('.planDelete').on('click', function() {
            const modal = $('#planDelete');

            modal.find('form').attr('action', $(this).data('href'))

            modal.modal('show')


        })

        var copyButton = document.querySelector('.copy');
        var copyInput = document.querySelector('.copy-text');
        copyButton.addEventListener('click', function(e) {
            e.preventDefault();
            var text = copyInput.select();
            document.execCommand('copy');
        });
        copyInput.addEventListener('click', function() {
            this.select();
        });


        $('.mobile-card-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '60px',
            arrows: false,
            dots: false,
            autoplay: false,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
            speed: 1500,
            autoplaySpeed: 1000,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.plan-wrapper').hide()
        $('.show-plans').click(function() {
            $('.plan-wrapper').slideDown()
        });
    </script>
    <script>
        $('.modal-table').hide()
        $('.submit-payment').attr('disabled', true)
        $('.submit-payment').text('Enter Amount')
        var invest_form = $('.invest-form')
        $('.modal_amount').keyup(function(e) {

            // $(this).val()
            // invest_form.find('input[name=min_pay]').val()
            // invest_form.find('input[name=max_pay]').val()
            // $('.submit-payment').attr('disabled', true);
            // $('.submit-payment').text('Please Follow Limit');

            // Function to parse value while ignoring commas
            function parseValue(value) {
                return parseFloat(value.replace(/,/g, ''));
            }

            var currentValue = parseValue($(this).val());
            var minPay = parseValue(invest_form.find('input[name=min_pay]').val());
            var maxPay = parseValue(invest_form.find('input[name=max_pay]').val());
            var fixAmount = parseValue(invest_form.find('input[name=fix_amount]').val());
            var modalMessage = $('.modal-error-message');

            if (fixAmount > 0) {
                if (currentValue != fixAmount) {
                    $('.submit-payment').prop('disabled', true);
                    $('.submit-payment').text('Please Follow Limit');
                    modalMessage.text(`Amount should have been equal to ${fixAmount}.`)
                    $('.modal-table').slideUp()
                } else {
                    $('.submit-payment').prop('disabled', false);
                    $('.submit-payment').text('Submit');
                    modalMessage.text(``)
                    $('.modal-table').slideDown()
                }
            } else {
                if (currentValue > maxPay || currentValue < minPay || currentValue < 1) {
                    $('.submit-payment').prop('disabled', true);
                    $('.submit-payment').text('Please Follow Limit');
                    modalMessage.text(`Amount must be between ${minPay} and ${maxPay}.`)
                    $('.modal-table').slideUp()
                } else {
                    $('.submit-payment').prop('disabled', false);
                    $('.submit-payment').text('Submit');
                    modalMessage.text(``)
                    $('.modal-table').slideDown()
                }
            }

            let expected = $(this).val() * $('#invest').find('input[name=plan_percentage]').val() / 100 +
                parseFloat($(this).val());
            $('.exp-profit').text(`$${expected} to $${(expected * 1 / 100) + expected}`)
            $('.bot-fee').text(`$${(expected * 1 / 100).toFixed(2) / 2}`)
        });
    </script>
    <script>
        var invest_form = $('.invest-form')
        $('.success-img-wrapper').hide()
        $('.payment-loading').hide()

        $('.submit-payment').click(function(e) {
            e.preventDefault();
            $('.payment-loading').fadeIn()
            $('.payment-loading h4').text('Loading ...')
            setTimeout(function() {
                $('.payment-loading h4').text('Bot Is Finding Accurate Pair For You');
            }, 3000);
            setTimeout(function() {
                // FETCHING SYMBOL
                fetch('https://quantummtradeai.com/api/cryptoSymbols')
                    .then(response => response.json())
                    .then(data => {
                        // FETCHING PRICE
                        $.ajax({
                            method: 'GET',
                            url: 'https://api.api-ninjas.com/v1/cryptoprice?symbol=' + data,
                            headers: {
                                'X-Api-Key': 'j/maOGmZgHTpjSrL7e+paA==GZJHhvIFnZGIa8zR'
                            },
                            contentType: 'application/json',
                            success: function(result) {
                                invest_form.find('input[name=pair_name]').val(result.symbol)
                                invest_form.find('input[name=pair_price]').val(result.price)
                                invest_form.find('input[name=timestamp]').val(result
                                    .timestamp)
                                $('.payment-loading h4').text(
                                    `Bot Selected ${result.symbol} For You, The Initial Pair Price Is ${result.price}`
                                );
                                setTimeout(function() {
                                    $('.payment-loading h4').text(
                                        `Processing With ${result.symbol}, Please Wait ...`
                                    );
                                }, 5000);
                                setTimeout(function() {
                                    $('.success-img-wrapper').hide()
                                    $('.payment-loading').hide()
                                    const modal = $('#invest');
                                    modal.modal('hide')
                                    invest_form.submit()
                                }, 10000);
                            },
                            error: function ajaxError(jqXHR) {
                                console.error('Error: ', jqXHR.responseText);
                            }
                        });
                        // FETCHING PRICE
                    })
                    .catch(error => console.error('Error fetching data:', error));
                // FETCH SYMBOL
            }, 9000);
            // FINAL
        })
    </script>

@endpush
