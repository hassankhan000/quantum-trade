<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from themeadapt.com/tf/iko/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2024 19:52:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IKO - ICO & Crypto Landing Page Template</title>
    <meta name="description" content="IKO - ICO & Crypto Landing Page Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/web_assets/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme4/dashboard_assets/assets/css/iziToast.min.css') }}">

</head>

<body class="home-purple-gradient">

    {{-- @if (@$general->preloader_status)
    <div class="preloader-holder">
        <div class="preloader">
        <img src="{{ asset('asset/theme4/images/logo-icon.png') }}" alt="preloader icon">
        <div class="preloader-spiner"></div>
        </div>
    </div>
    @endif --}}


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

    @include(template().'layout.header')
        @yield('content')
    @include(template().'layout.footer')

    {{-- back to to btn --}}

    <button type="button" class="cmn-btn btn-sm btn-floating" id="btn-back-to-top">
        <i class="fas fa-arrow-up text-light"></i>
    </button>

    <script src="{{ asset('asset/theme4/web_assets/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/web_assets/assets/js/main.js') }}"></script>
    <script src="{{ asset('asset/theme4/frontend/js/iziToast.min.js') }}"></script>

    @stack('script')
    @if (@$general->twak_allow)
        <script type="text/javascript"> 
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "{{ @$general->twak_key }}";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            "use strict";
            iziToast.error({
                message: "{{ session('error') }}",
                position: 'topRight'
            });
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            "use strict";
            iziToast.success({
                message: "{{ session('success') }}",
                position: 'topRight'
            });
        </script>
    @endif

    @if (session()->has('notify'))
        @foreach (session('notify') as $msg)
            <script>
                "use strict";
                iziToast.{{ $msg[0] }}({
                    message: "{{ trans($msg[1]) }}",
                    position: "topRight"
                });
            </script>
        @endforeach
    @endif

    @if (@$errors->any())
        <script>
            "use strict";
            @foreach ($errors->all() as $error)
                iziToast.error({
                message: "{{ __($error) }}",
                position: "topRight"
                });
            @endforeach
        </script>
    @endif

    <script>
        'use strict'
        $(document).on('submit', '#subscribe', function(e) {
            e.preventDefault();
            const email = $('.subscribe-email').val();
            var url = "{{ route('subscribe') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    email: email,
                },
                success: (data) => {
                    iziToast.success({
                        message: data.message,
                        position: 'topRight',
                    });
                    $('.subscribe-email').val('');

                },
                error: (error) => {
                    if (typeof(error.responseJSON.errors.email) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.email,
                            position: 'topRight',
                        });
                    }

                }
            })

        });

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