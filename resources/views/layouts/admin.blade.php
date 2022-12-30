<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{ config('myglobals.app_name') }}">
    <meta name="description"
        content="{{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong professionals and 5
    mega data center’s parent feature with experience of over 15+ years in Data Center Industry
    serving 32 million Customers and generating best returns for investors with high efficiency.">
    <meta name="keywords" content="crypto, mining, service, bitcoin, ethereum">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Bit-fin.co">

    <title>{{ config('myglobals.app_name') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/auth/favicon.png') }}" type="image/x-icon">

    <meta property="og:title" content="{{ config('myglobals.app_name') }}">
    <meta property="og:description" content="Advance Crypto Mining Service.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ mix('css/dash.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('ven/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ven/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div class="wrapper">
        <div class="headerstrip">&nbsp;</div>
        <div class="headerwrap">
            <div class="menuwrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="nav_wrap">
                                <a class="navbar-brand page-scroll hide" href="{{ url('/') }}"><img
                                        src="{{ asset('images/logo.png') }}" alt="" /></a>
                                <div class="collapse navbar-collapse fadeInRight wow" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="hvr-bob"><a href="{{ url('/') }}">HOME</a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="loginarea mt-4">
                                @auth
                                    <div class="login hvr-backward fadeInLeft wow">
                                        <a href="{{ route('home') }}">
                                            <span class="icon">
                                                <img src="{{ asset('images/auth/loginicon.png') }}" alt="">
                                            </span>dashboard</a>
                                    </div>
                                    <div class="signup hvr-backward fadeInLeft wow">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="icon">
                                                <img src="{{ asset('images/auth/signupicon.png') }}" alt="">
                                            </span>logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @else
                                    <div class="login hvr-backward fadeInLeft wow">
                                        <a href="{{ route('login') }}"><span class="icon"><img
                                                    src="{{ asset('images/auth/loginicon.png') }}" alt=""></span>
                                            member login</a>
                                    </div>
                                    <div class="signup hvr-backward fadeInLeft wow">
                                        <a href="{{ route('register') }}"><span class="icon"><img
                                                    src="{{ asset('images/auth/signupicon.png') }}" alt=""></span>
                                            open
                                            account</a>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerwrap insideheaders">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="bounceInDown wow">Admin <span>Panel</span></h1>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <h4 class="badge bg-info p-2">{{ session('success') }}</h4>
        @endif

        @yield('content')

        <div class="footerwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footerleft">
                            <p><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"
                                        alt=""></a>
                            </p>
                            <p>&copy; 2022 bit-fin.co All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footermid">
                            <h4><span>Navigation</span></h4>
                            <ul>
                                <li><a href="{{ url('/') }}">home</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footerright">
                            <h4><span>contacts</span></h4>
                            <p class="loaction">13b Gatwick Gate Industrial Estate, Lowfield Heath, Crawley, England
                            </p>
                            <p class="email">support@bit-fin.co</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Scripts Start -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/lib/setting-2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('ven/owlcarousel/owl.carousel.js') }}"></script>
    <script src="//code.tidio.co/bqwkfaba7sy6a2zlvrdxiwbzmz0bsjmw.js" async></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Other Scripts End -->

    @yield('script')

</body>

</html>
