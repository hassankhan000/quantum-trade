@extends(template() . 'layout.master2')
@section('content2')
    <style>
        .small-text {
            font-size: 9px !important;
        }

        .nk-content-fluid {
            background: #232721;
        }

        .border-success {
            border-color: #aef32d !important;
        }

        /*Now the CSS*/

        .tree ul {
            padding-top: 20px;
            position: relative;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        /*We will use ::before and ::after to draw the connectors*/

        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #aef32d;
            width: 50%;
            height: 20px;
        }

        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #aef32d;
        }

        /*We need to remove left-right connectors from elements without
                                                    any siblings*/
        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }

        /*Remove space from the top of single children*/
        .tree li:only-child {
            padding-top: 0;
        }

        /*Remove left connector from first child and
                                                    right connector from last child*/
        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }

        /*Adding back the vertical connector to the last nodes*/
        .tree li:last-child::before {
            border-right: 1px solid #aef32d;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        /*Time to add downward connectors from parents*/
        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #aef32d;
            width: 0;
            height: 20px;
        }

        .tree li a {
            border: 1px solid #aef32d;
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;

            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;

            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        /*Time for some hover effects*/
        /*We will apply the hover effect the the lineage of the element also*/
        .tree li a:hover,
        .tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
            border: 1px solid #94a0b4;
        }

        /*Connector styles on hover*/
        .tree li a:hover+ul li::after,
        .tree li a:hover+ul li::before,
        .tree li a:hover+ul::before,
        .tree li a:hover+ul ul::before {
            border-color: #94a0b4;
        }

        /*Thats all. I hope you enjoyed it.
                                                    Thanks :)*/
    </style>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="col-md-6 col-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Deposit:
                                            {{ round($TotalTeamDeposit, 2) }}</h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Deposit: N/A</p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month Deposit: N/A</p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Members:
                                            {{ $TotalTeamMembers }}</h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Total Active: N/A</p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Active: N/A</p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month: N/A</p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="text-white fw-bold m-0">Total Commision:
                                            {{ round($totalTeamCom, 2) }}</h6>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">Today Commission: N/A</p>
                                        <hr class="border-success">
                                        <p class="text-light m-0 small-text">This Month Commission: N/A</p>
                                    </div>
                                </div>
                                {{-- <hr class="border-success"> --}}
                                <div class="row">
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 1 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            {{ round($SumLvlOneDepositAmnt->total_amount, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: {{ count($LvlOneUsers) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            {{ round($SumLvlOneComAmnt->total_com, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission: N/A</p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 2 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            {{ round($SumLvlTwoDepositAmnt->total_amount, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: {{ count($LvlTwoUsers) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            {{ round($SumLvlTwoComAmnt->total_com, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission: N/A</p>
                                    </div>
                                    <div class="col-4 border border-success p-3">
                                        <h6 class="fw-bold text-light">Level 3 Details</h6>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Deposit:
                                            {{ round($SumLvlThreeDepositAmnt->total_amount, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Members: {{ count($LvlThreeUsers) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Total Commission:
                                            {{ round($SumLvlThreeComAmnt->total_com, 2) }}</p>
                                        <hr class="border-success">
                                        <p class="text-white small-text m-0">Today Commission: N/A</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label>{{ __('Your refferal link') }}</label>
                                    <div class="input-group mb-3 d-flex align-items-center">
                                        <input type="text" id="refer-link"
                                            style="
                                            font-size: 9px;
                                            height: auto;
                                            width: auto;
                                            padding: 0px 5px;
                                            margin: 0;
                                            border: 1px solid #aef32d;"
                                            class="form-control text-success bg-dark copy-text"
                                            value="{{ route('user.register', @Auth::user()->username) }}"
                                            placeholder="referallink.com/refer" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" readonly>
                                        <button type="button" class="input-group-text copy cmn-btn"
                                            id="basic-addon2">{{ __('Copy') }}</button>
                                    </div>
                                    <div class="w-100">
                                        <h6 class="text-white" style="font-size: 11px;">Username: <span
                                                class="text-success">{{ @Auth::user()->username }}</span>
                                        </h6>
                                    </div>
                                    <div class="bg-dark rounded p-3 mt-3">
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">In (V0) you're able to invest
                                            upto 250$ estimated profit daily 1.8%~ 2.3%.
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V1 you have to
                                            achieve 30 members and 10 members must be on level 1 with the minimum deposit of
                                            100$ V1 Completion Reward is 75$ And Overall Deposit Must be 3000$ to Receive
                                            The Reward. and you're able to invest upto 1000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V2 you have to
                                            Complete 80 Members and 30 members must be on level one 1 with Minimum Deposit
                                            of 100$ V2 Completion Reward is 150$ and Overall Deposit Must be 8000$ to
                                            Receive the reward amount and you're able to invest 2000$</p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V3 you have to
                                            Complete 150 Members and 60 members must be on level one 1 with Minimum Deposit
                                            of 100$ V3 Completion Reward is 300$ and Overall Deposit Must be 15000$ to
                                            Receive the reward amount and you're able to invest 5000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V3 you have to
                                            To Achieve V4 you have to Complete 250 Members and 100 members must be on level
                                            one 1 with Minimum Deposit of 100$ V3 Completion Reward is 500$ and Overall
                                            Deposit Must be 25000$ to Receive the reward amount and you're able to invest
                                            8000$
                                        </p>
                                        <div class="d-flex flex-column">
                                            <span>|</span>
                                            <span>|</span>
                                        </div>
                                        <p style="font-size: 10px; color: #aef32d; margin: 0;">To Achieve V5 you have to
                                            Complete 350 Members and 150 members must be on level one 1 with Minimum Deposit
                                            of 100$ V3 Completion Reward is 700$ and Overall Deposit Must be 35000$ to
                                            Receive the reward amount and you're able to invest 15000$
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @php
                                $reference = auth()->user()->refferals;

                            @endphp
                            @php
                                $reference = auth()->user()->refferals;
                            @endphp

                            @if ($reference->count() > 0)
                                {{-- <div class="tree">
                                    <div class="node m-0">
                                        {{ auth()->user()->full_name . ' - ' . currentPlan(auth()->user()) }}
                                    </div>
                                    <div class="children">
                                        @foreach ($reference as $user)
                                            <div class="node">
                                                {{ $user->full_name . ' - ' . currentPlan($user) }}
                                            </div>
                                            <div class="children">
                                                @foreach ($user->refferals as $ref)
                                                    <div class="node">
                                                        {{ $ref->full_name . ' - ' . currentPlan($ref) }}
                                                    </div>
                                                    <div class="children">
                                                        @foreach ($ref->refferals as $ref2)
                                                            <div class="node">
                                                                {{ $ref2->full_name . ' - ' . currentPlan($ref2) }}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}

                                <h5 class="mb-0 text-light text-center fw-bold">{{ __('Reference Tree') }}</h5>

                                <div class="tree pb-5">
                                    <ul>
                                        <li>
                                            <a>{{ auth()->user()->full_name . ' - ' . currentPlan(auth()->user()) }}</a>
                                            <ul>
                                                @foreach ($reference as $user)
                                                    <li>
                                                        <a>{{ $user->full_name . ' - ' . currentPlan($user) }}</a>
                                                        <ul>
                                                            @foreach ($user->refferals as $ref)
                                                                <li>
                                                                    <a>{{ $ref->full_name . ' - ' . currentPlan($ref) }}</a>
                                                                    <ul>
                                                                        @foreach ($ref->refferals as $ref2)
                                                                            <li>
                                                                                <a>
                                                                                    {{ $ref2->full_name . ' - ' . currentPlan($ref2) }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <p class="mt-2">
                                    {{ __('No Reference User Found') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        'use strict'
        document.getElementById("imageUpload").onchange = function() {
            show();
        };

        function show() {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-id-preview");
                preview.src = src;
                preview.style.display = "block";
                document.getElementById("file-id-preview").style.visibility = "visible";
            }
        }
    </script>
    <script>
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
    </script>
@endpush
