<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Bitcoin Financial Ltd">
    <meta name="description"
        content="Bitcoin Financial Ltd Company Platform is a group company of 190, 000+ strong professionals and 5
    mega data center’s parent Cyfuture with experience of over 15+ years in Data Center Industry
    serving 32 million Customers and generating best returns for investors with high efficiency.">
    <meta name="keywords" content="crypto, mining, service, bitcoin, ethereum">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Bit-fin.biz">

    <title>Bitcoin Financial Ltd Company</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <meta property="og:title" content="Bitcoin Financial Ltd">
    <meta property="og:description" content="Advance Crypto Mining Service.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3d22.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flipclock.css') }}">
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="{{ asset('ven/translate_googleapis/translate_static/css/translateelement.css') }}">
    <style rel="stylesheet" type="text/css" href="{{ asset('css/eapps.css') }}"></style>
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <style rel="stylesheet" type="text/css" href="{{ asset('css/my_custom.css') }}"></style>
</head>

<body style="min-height: 100%; top: 0px;">

    <div class="loader-fl" style="display: none;">
        <img src="{{ asset('images/loader.svg') }}" alt="">
    </div>

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="top-con">
                        <ul>
                            <li class="hide-mb"><img src="{{ asset('images/envelope.png') }}" alt="">
                                support@bit-fin.co
                            </li>



                            <li>
                                <div id="google_translate_element"></div>

                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            layout: google.translate.TranslateElement.InlineLayout.VERTICAL
                                        }, 'google_translate_element');
                                    }
                                </script>


                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                </script>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container max-height">
            <div class="logo-main">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="" draggable="false">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if (Request::is('/')) active @endif" id="index">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item @if (Request::is('about')) active @endif" id="about-us"
                                href="{{ route('about') }}">About us</a>
                            <a class="dropdown-item @if (Request::is('why_us')) active @endif" id="why-us"
                                href="{{ route('why_us') }}">Why Choose us</a>

                            <a class="dropdown-item @if (Request::is('forex_trading')) active @endif"
                                id="forex_trading" href="{{ route('forex_trading') }}">Forex Trading</a>
                            <a class="dropdown-item @if (Request::is('commitments')) active @endif" id="commitments"
                                href="{{ route('commitments') }}">Commitments</a>
                            <a class="dropdown-item @if (Request::is('stratagies')) active @endif" id="stratagies"
                                href="{{ route('stratagies') }}">Strategies</a>
                        </div>
                    </li>
                    <li class="nav-item @if (Request::is('affiliate')) active @endif" id="affiliate">
                        <a class="nav-link" href="{{ route('affiliate') }}">Affiliate</a>
                    </li>

                    <li class="nav-item" id="faq">
                        <a class="nav-link" href="faq">FAQ</a>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('home') }}" id="" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" id="" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>

                            <script src="//code.tidio.co/bqwkfaba7sy6a2zlvrdxiwbzmz0bsjmw.js" async></script>
                        </li>
                    @endauth
                    @if (config('myglobals.socials.facebook'))
                        <li class="nav-item">
                            <ul class="nav-social">
                                <li><a href="{{ config('myglobals.socials.twitter') }}"><img
                                            src="{{ asset('images/tp-t.png') }}" alt=""></a>
                                </li>
                                <li><a href="{{ config('myglobals.socials.facebook') }}"><img
                                            src="{{ asset('images/tp-f.png') }}" alt=""></a>
                                </li>
                                <li><a href="{{ config('myglobals.socials.instagram') }}"><img
                                            src="{{ asset('images/tp-i.png') }}" alt=""></a>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <section class="section-sp footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foo-log">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <p>Bitcoin Financial Ltd Company Platform is a group company of 190, 000+ strong professionals and 5
                        mega data center’s parent Cyfuture with experience of over 15+ years in Data Center Industry
                        serving 32 million Customers and generating best returns for investors with high efficiency.</p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <ul>

                        <li><a href="{{ route('affiliate') }}">Affiliate</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Company</h4>
                    <ul>

                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('why_us') }}">Why Choose Us</a></li>

                        <li><a href="{{ route('forex_trading') }}">Forex Trading</a></li>
                        <li><a href="{{ route('commitments') }}">Commitments</a></li>
                        <li><a href="{{ route('stratagies') }}">Strategies</a></li>
                    </ul>

                </div>
                <div class="col-md-3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="security">Security Information</a></li>

                        <li><a href="terms_and_conditions">Terms &amp; Conditions</a></li>
                    </ul>
                    <div class="mt-3">
                        <a href="#" title="DMCA.com Protection Status" class="dmca-badge" target="_blank">
                            <img src="{{ asset('images/dmca.png') }}" alt="DMCA.com Protection Status"
                                width="100px"></a>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <div class="copyrights">
        <div class="container">
            <ul>
                <li>
                    <p>&copy; Copyright 2022 bit-fin.co All rights reserved.</p>
                </li>
                <li>
                    <p><img src="{{ asset('images/envelope.png') }}" alt=""> support@bit-fin.co</p>
                </li>
            </ul>
        </div>
    </div>


    <div class="fixed-buttons" style="position:fixed; z-index:8; bottom: 13px; left:13px;">
        <a class="button button-primary" href="{{ route('login') }}" style="padding:12px 25px">Sign In</a>
        <a class="button button-secondary" href="{{ route('register') }}"
            style="padding:12px 25px; margin-top: 0; margin-left: 10px; background: #0B0E11;">Register</a>
    </div>

    {{-- Other Scripts Start --}}

    <script src="{{ asset('js/lib/jquery-3.3.1/jquery.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" charset="UTF-8"
        src="{{ asset('ven/translate_googleapis/translate_static/js/element/main.js') }}"></script>
    <script type="text/javascript" charset="UTF-8"
        src="{{ asset('ven/translate_googleapis/element/TE_20210503_00/e/js/element/element_main.js') }}"></script>
    <script src="{{ asset('js/lib/popper.js-1.12.9/umd/popper.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/range-slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/lang-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/slick.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/feather-icons" type="text/javascript"></script>
    <script src="{{ asset('js/lib/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/wow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/page-loader.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/flipclock.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/beacon.min.js') }}"
        data-cf-beacon="{&quot;rayId&quot;:&quot;679894a50d5e0736&quot;,&quot;token&quot;:&quot;ae18eedf3f954d6cb0e8784b192469b0&quot;,&quot;version&quot;:&quot;2021.7.0&quot;,&quot;si&quot;:10}"
        defer></script>
    <script src="{{ asset('js/lib/jquery.fancybox.min.js') }}" type="text/javascript"></script>

    {{-- Other Scripts End --}}

    <script type="text/javascript">
        $('#popup-modal').modal('show');
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.rnf-cs').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                responsive: [{
                        breakpoint: 768,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    }
                ]
            });
            $('.rnf-videos').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                responsive: [{
                        breakpoint: 768,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    }
                ]
            });
        });
    </script>

    <script type="text/javascript">
        feather.replace();
    </script>

    <script type="text/javascript">
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 100,
        });
        wow.init();
    </script>

    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".variable").slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>

    <script type="text/javascript">
        var clock;

        $(document).ready(function() {

            // Grab the current date
            var currentDate = new Date();

            // Set some date in the past. In this case, it's always been since Jan 1
            var pastDate = new Date(Date.UTC(2021, 4, 27, 5, 0, 0));

            // Calculate the difference in seconds between the future and current date
            var diff = currentDate.getTime() / 1000 - pastDate.getTime() / 1000;

            // Instantiate a coutdown FlipClock
            clock = $('.clock').FlipClock(diff, {
                clockFace: 'DailyCounter'
            });

            // Instantiate a coutdown FlipClock
            clock = $('.clock-days').FlipClock(diff, {
                clockFace: 'DailyCounter'
            });
        });
    </script>

</body>

</html>
