<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from.net/demo6/pages/auths/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2024 12:20:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../../images/favicon.png">
    <title>Login | Quantum Trade AI</title>
    <link rel="stylesheet" href="{{ asset('asset/theme4/dashboard_assets/assets/css/dashlitee5ca.css') }}">
    <link id="skin-default" rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/css/themee5ca.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/dashboard_assets/assets/css/iziToast.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <style>
        .btn-primary {
            background-color: #395d00 !important;
        }

        .nk-block-middle {
            margin-bottom: auto;
            background: linear-gradient(#282828c7, #282828c7), url("https://img.freepik.com/premium-photo/abstract-black-background-with-diagonal-design_1145069-13726.jpg?w=360") !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            height: 100% !important;
            border: 0 !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
        }

        .nk-block-title {
            color: white !important;
            font-size: 33px !important;
        }

        .nk-block-des p {
            color: rgb(202 255 2) !important;
        }

        input {
            background: transparent !important;
            color: white !important;
        }

        .form-note-s2 {
            color: white !important;
        }

        .form-label {
            color: #9d9d9d !important;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-white npc-general pg-auth">

    @if (@$general->preloader_status)
        <div id="preloader"></div>
    @endif

    @if (@$general->allow_modal)
        @include('cookieConsent::index')
    @endif


    @if (@$general->analytics_status)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ @$general->analytics_key }}"></script>
        <script>
            'use strict'
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "{{ @$general->analytics_key }}");
        </script>
    @endif
    <div class="nk-app-root">
        <div class="nk-main ">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/bundlee5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/scriptse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/demo-settingse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/iziToast.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    @stack('script')
    @if (@$general->twak_allow)
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "https://embed.tawk.to/{{ @$general->twak_key }}";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            // "use strict";
            // iziToast.error({
            //     message: "{{ session('error') }}",
            //     position: 'topRight'
            // });
            Swal.fire({
                title: 'Error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            // "use strict";
            // iziToast.success({
            //     message: "{{ session('success') }}",
            //     position: 'topRight'
            // });
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif

    @if (session()->has('notify'))
        @foreach (session('notify') as $msg)
            <script>
                // "use strict";
                // iziToast.{{ $msg[0] }}({
                //     message: "{{ trans($msg[1]) }}",
                //     position: "topRight"
                // });
                Swal.fire({
                    title: '{{ $msg[0] }}',
                    text: '{{ trans($msg[1]) }}',
                    icon: '{{ $msg[0] }}',
                    confirmButtonText: 'Ok'
                })
            </script>
        @endforeach
    @endif

    @if (@$errors->any())
        <script>
            // "use strict";
            @foreach ($errors->all() as $error)
                // iziToast.error({
                //     message: "{{ __($error) }}",
                //     position: "topRight"
                // });
                Swal.fire({
                    title: 'Error!',
                    text: '{{ __($error) }}',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            @endforeach
        </script>
    @endif


    <script>
        'use strict';

        $(document).ready(function() {
            $('#trial_subscribe').on('click', function(e) {

                e.preventDefault();
                var email = $('#trial_email').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: "{{ route('subscribe') }}",
                    data: {
                        email: email
                    },
                    success: function(response) {

                        if (response.fails) {
                            notify('error', response.errorMsg.email)
                        }

                        if (response.success) {
                            $('#email').val('');
                            notify('success', response.successMsg)

                        }
                    }
                });
            })


        });
    </script>


    <script>
        'use strict'
        var url = "{{ route('user.changeLang') }}";

        $(".changeLang").change(function() {
            if ($(this).val() == '') {
                return false;
            }
            window.location.href = url + "?lang=" + $(this).val();
        });
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>


</body>


</html>
