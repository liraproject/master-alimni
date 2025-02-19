<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Alimni - Learning Center</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!--== animate -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="{{ asset('assets/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('assets/css/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{ asset('assets/css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-color -->
    <link href="{{ asset('assets/css/theme-color/color-3.css') }}" rel="stylesheet" type="text/css" />

    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        {{-- <div id="ht-preloader">
            <div class="loader clear-loader">
                <div class="loader-box"></div>
                <div class="loader-box"></div>
                <div class="loader-box"></div>
                <div class="loader-box"></div>
                <div class="loader-wrap-text">
                    <div class="text">
                        <span>A</span><span>L</span><span>I</span><span>M</span><span>N</span><span>I</span>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- preloader end -->

        {{ $slot }}

        <!--back-to-top start-->

        <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

        <!--back-to-top end-->


        <!-- inject js start -->

        <!--== jquery -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>

        <!--== owl-carousel -->
        <script src="{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>

        <!--== magnific-popup -->
        <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!--== counter -->
        <script src="{{ asset('assets/js/counter/counter.js') }}"></script>

        <!--== countdown -->
        <script src="{{ asset('assets/js/countdown/jquery.countdown.min.js') }}"></script>

        <!--== canvas -->
        <script src="{{ asset('assets/js/canvas.js') }}"></script>

        <!--== confetti -->
        <script src="{{ asset('assets/js/confetti.js') }}"></script>

        <!--== step animation -->
        <script src="{{ asset('assets/js/snap.svg.js') }}"></script>
        <script src="{{ asset('assets/js/step.js') }}"></script>

        <!--== contact-form -->
        <script src="{{ asset('assets/js/contact-form/contact-form.js') }}"></script>

        <!--== wow -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>

        <!--== theme-script -->
        <script src="{{ asset('assets/js/theme-script.js') }}"></script>

        <!-- inject js end -->

</body>

</html>
