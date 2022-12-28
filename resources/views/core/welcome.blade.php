@extends('layouts.core')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/slider-usa.jpg') }}" alt="Sixth slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; color:whitesmoke;">
                        <span></span> START MINING WITH {{ config('myglobals.app_name') }} PLATFORM
                    </h1>
                    <div class="hero-action wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="{{ asset('images/certificate/cert-scrshot-01.jpg') }}" class="btn-h-left">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right feather-icon">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item ">
                <img class="d-block w-100" src="{{ asset('images/slider-5.jpg') }}" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;color:wheat;">
                        <span>WE </span> ARE THE
                        HIGHEST PAYING <span>&amp;</span> MINING
                        COMPANY GLOBALLY
                    </h1>
                    <div class="hero-action wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a href="about" class="btn-h-left">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather-icon">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></a>

                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slider-bman.jpg') }}" alt="sixth slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;color:wheat;">
                        <span>WE SERVE OVER</span> 32 MILLION <span>HAPPY CUSTOMERS</span> GLOBALLY
                    </h1>
                    <div class="hero-action wow fadeInUp animated" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="about" class="btn-h-left">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather-icon">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/slider-uk.jpg') }}" alt="sixth slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;color:wheat;">
                        <span>PURCHASE ANY PLAN OF YOUR CHOICE</span> AND ENJOY LIFETIME ROI VIA CLOUD MINING
                    </h1>
                    <div class="hero-action wow fadeInUp animated" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}" class="btn-h-left"
                            target="_blank">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right feather-icon">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg></a>

                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <div class="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-left feather-icon">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <div class="nxt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right feather-icon">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="market-ticker">

            <div class="tradingview-widget-container cs-con" style="width: 100%; height: 104px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0"
                    src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=in#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AEURGBP%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AINGEUR%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AAUGUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AINIEUR%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A76%2C%22utm_source%22%3A%22richnetfunds.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D"
                    style="box-sizing: border-box; height: 72px; width: 100%;"></iframe>
                <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span
                            class="blue-text"></span></a>
                </div>

                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        font-family: 'Trebuchet MS', Arial, sans-serif !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright .blue-text {
                        color: #2962FF !important;
                    }

                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #1E53E5 !important;
                    }

                    .tradingview-widget-copyright a:active .blue-text {
                        color: #1848CC !important;
                    }

                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2962FF !important;
                    }
                </style>
            </div>

        </div>
        <br><br><br>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 order-sm-12">
                        <img src="{{ asset('images/bitcoin-2.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 order-sm-12 top-mb-25">
                        <div class="first-sc">
                            <h4>About us</h4>
                            <h2>CLOUD MINING SERVICE PROVIDERS.</h2>
                            <p>{{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong
                                professionals and 5 mega data center’s parent Cyfuture with experience of over 15+ years
                                in Data Center Industry serving 32 million Customers. Our crypto mining team comes from
                                different scientific disciplines and constantly monitor latest innovations and implement
                                them in order to benefit our investors.. At {{ config('myglobals.app_name') }}, we’re using
                                world’s best ASIC (Application specific integrated circuit) and GPU (Graphics processing
                                unit) machines to generate best returns for investors with high efficiencies.</p>
                            <div class="btn-g">
                                <a href="#plan">Our Plans <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right feather-icon">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-sp section-dark">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="section-title">
                    <h5>Plans</h5>
                    <h2 id="plans">Cloud Pricing Plan</h2>
                </div>
                <div class="row inv-top">

                    @forelse ($plans as $plan)
                        <div class="col-lg-4 col-md-6 rv-bt-4__mbl mb-3">
                            <div class="rf-card">
                                <div class="rf-card__body">
                                    <div class="rf-card__hdr">
                                        <h4 class="text-uppercase">{{ $plan->name }}</h4>
                                        <div class="plan-wr">
                                            <div class="plan-icon">

                                            </div>
                                        </div>
                                        <h1 class="text-white">ROI: {{ $plan->return . '%' }}</h1>
                                    </div>
                                    <p class="text-white"><strong><em>{{ $plan->return . '%' }} Profit</em></strong>
                                    </p>

                                    <p class="text-white"><strong><em>After {{ $plan->mining_period / 24 }}
                                                Day(s)</em></strong></p>
                                    <ul>
                                        <li>
                                            Minimum Input: <strong>
                                                @if ($plan->min_deposit == 1)
                                                    &#x20BF;1.00 BTC
                                                @else
                                                    @money($plan->min_deposit)
                                                @endif
                                            </strong>
                                        </li>
                                        <li>
                                            Maximum Input: <strong>
                                                @if ($plan->max_deposit == null)
                                                    Unlimited
                                                @else
                                                    @money($plan->max_deposit)
                                                @endif
                                            </strong>
                                        </li>
                                        <li>Capital Return:<strong> YES</strong></li>
                                    </ul>
                                    <div class="rf-card__invest">
                                        <a href="{{ route('login') }}">Purchase Now <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-chevron-right feather-icon">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-warning" role="alert">
                            Admin please run your migrations!
                        </div>
                    @endforelse

                </div>

                <div class="main-plan-in mt-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="higl-txt"><img src="{{ asset('images/refer/change.svg') }}" width="30px">
                                <h4>@money(50) Direct Referral</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="higl-txt"><img src="{{ asset('images/refer/money-bag.svg') }}" width="30px">
                                <h4>@money(config('myglobals.min_withdrawal')) Minimum Withdrawal</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="keypoints keypoints-fist">
                    <div class="section-title section-calc pad-top-0">
                        <h5 class="text-white">Plan Key Points</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pay-m">
                                <ul>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Return on
                                        Investment:
                                        After
                                        Complete Mining Cycle</li>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Direct Referral
                                        Bonus: <strong class="ml-1"> @money(config('myglobals.ref_worth'))</strong>
                                    </li>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Withdrawal Charges:
                                        <strong class="ml-1">
                                            {{ config('myglobals.withdrawal_charge') . '%' }}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pay-m">
                                <ul>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Internal transfer:
                                        No
                                        Charges</li>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Minimum Investment:
                                        <strong class="ml-1"> @money(config('myglobals.min_investment'))</strong>
                                    </li>
                                    <li><img src="{{ asset('images/tick.svg') }}" alt=""> Minimum Withdrawal:
                                        <strong class="ml-1"> @money(config('myglobals.min_withdrawal'))</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                    <div class="section-title section-calc">
                        <h5>Calculate the returns</h5>
                        <h2>Calculator</h2>
                        <!-- CryptoRival Calculator Widget BEGIN -->
                        <script type="text/javascript" src="{{ asset('js/lib/cryptorival/js/calcwidget.js') }}"></script>
                        <a id="cr-copyright" href="https://cryptorival.com/" target="_blank" rel="nofollow">Powered
                            by CryptoRival</a>
                        <script type="text/javascript">
                            showCalc('bitcoin', '500', false, '0', 'f93', 'f93', 'f93', '4e9f15', '09c', 'f0ad4e', 'd9534f', 'f5f5f5', 'eee');
                        </script>
                        <!-- CryptoRival Calculator Widget END -->
                </center>

                <br>
                <br>
            </div>
        </section>

        <div class="container">
            <iframe width="100%" height="315" src="{{ config('myglobals.socials.youtube') }}"
                title="Bitcoin Financial company" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <br><br>

        <section class="section-sp bg-black wow fadeInUp" style="visibility: hidden; animation-name: none;">
            <div class="container">
                <h1 class="team-home text-center text-white">Our Mining Farm</h1>
                <div class="row clearfix">
                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team2.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team3.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team14.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team5.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team6.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team7.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team10.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team11.jpg') }}" class="img-fluid"></a>
                    </div>



                    <div class="col-6 col-md-3 col-lg-3 mb-3 offset-md-3 offset-lg-3">
                        <a href="#"><img src="{{ asset('images/team/team12.jpg') }}" class="img-fluid"></a>
                    </div>

                    <div class="col-6 col-md-3 col-lg-3 mb-3">
                        <a href="#"><img src="{{ asset('images/team/team13.jpg') }}" class="img-fluid"></a>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-sp">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2>Commitment To Our Investors</h2>
                        </div>
                        <p>
                            {{ config('myglobals.app_name') }} appreciate the trust the investors have in us all throughout
                            the
                            world. Even at
                            difficult times when other businesses are suffering due to pandemics, war, economic and
                            social unrest, we on the other hand have been able to support our investors and our
                            employees and even support their families as w
                            ell. We are grateful to our clients in keeping
                            trust in us and investing in us and we promise to keep the trust and pay back the profits
                            along
                            with the other bonuses promptly and diligently.
                        </p>
                        <p> Our success in balancing out the multiple
                            businesses and reaping profits, and then supporting the community back even when most of
                            the governments have failed makes us very proud.</p>
                        <div class="btn-g">
                            <a href="#">Read More<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right feather-icon">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 top-mb-25">
                        <div class="vt-com__crt">
                            <a href="#" data-toggle="modal" data-target="#vtCertModelUSA">
                                <img src="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}" alt=""
                                    class="cert-sm">
                            </a>

                            <div class="modal fade" id="vtCertModelUSA" tabindex="-1" role="dialog"
                                aria-labelledby="vtCertModelUSALabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="vt-modl__crt">
                                                <img src="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}"
                                                    alt="" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="com-dtl gp-tp-2 mt-3">
                                <h3>ASIC ID</h3>
                                <p>90 763 781 563</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 top-mb-25">
                        <div class="vt-com__crt">
                            <a href="#" data-toggle="modal" data-target="#vtCertModel">
                                <img src="{{ asset('images/certificate/cert-scrshot-01.jpg') }}" alt=""
                                    class="cert-sm">
                            </a>

                            <div class="modal fade" id="vtCertModel" tabindex="-1" role="dialog"
                                aria-labelledby="vtCertModelLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="vt-modl__crt">
                                                <img src="{{ asset('images/certificate/cert-scrshot-01.jpg') }}"
                                                    alt="" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="com-dtl gp-tp-2 mt-3">
                                <h3>Your Funds Are Fully Insured</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-sp section-ylw">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="section-title">
                    <h5>Values</h5>
                    <h2>Our Core Values</h2>
                    <p>Our core values are our company’s foundation. Our business strategy is designed based on
                        our core values. Our core values work as guiding parameters to the way we function and
                        represent who we are. Our relationship with our employees and our investors are based on
                        our core values.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="values-list">
                            <div class="value-icon">
                                <img src="{{ asset('images/values/001-system.svg') }}" alt="">
                            </div>
                            <div class="value-con">
                                <p><strong>Integrity</strong> – We practice honesty and build our relationship on it. We
                                    do
                                    business the right
                                    way. We assure the timely payout of the entitled profits and bonuses to our clients.
                                </p>
                            </div>
                        </div>
                        <div class="values-list">
                            <div class="value-icon">
                                <img src="{{ asset('images/values/002-accepted.svg') }}" alt="">
                            </div>
                            <div class="value-con">
                                <p><strong>Be Accountable</strong> – Protection of your assets, financial stability,
                                    protection against data theft
                                    and legal compliance has been primary concern of our company.</p>
                            </div>
                        </div>
                        <div class="values-list mr-bt-20__minus">
                            <div class="value-icon">
                                <img src="{{ asset('images/values/003-meeting.svg') }}" alt="">
                            </div>
                            <div class="value-con">
                                <p><strong>Teamwork</strong> – We work together to make a difference. The company will
                                    always support the
                                    investors and always strive to bring forth team-leaders from regular investors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="values-list">
                            <div class="value-icon">
                                <br>
                            </div>

                        </div>
                    </div>
                    <div class="values-list">
                        <div class="value-icon">
                            <img src="{{ asset('images/values/005-respect.svg') }}" alt="">
                        </div>
                        <div class="value-con">
                            <p><strong>Respect</strong> – We respect the clients’ unimpeded access to their account and
                                make
                                sure to keep
                                the server and website protected. We appreciate you for selecting us as your investment
                                partner.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="section-sp">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
            </div>
        </div>

    </div>

    <section class="section-sp section-dark">
        <div class="container">
            <div class="section-title btm-50">
                <h5>Advantages</h5>
                <h2>Advantages Of Investing In {{ config('myglobals.app_name') }}</h2>
            </div>
            <div class="row centered wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="col-lg-6 col-md-6">
                    <div class="adv-con">
                        <h1>High Standard Security</h1>
                        <p>We aim on creating risk-free investment environment for our investors. Safety of your
                            investment will be our prime concern. Data-security and anti-theft protection features have
                            been implemented to safeguard the information of all our investors and stakeholders. Bitcoin
                            Financial Company is an authentic company with EV SSL Certificate. Our website is very
                            secure and guarantees safety of our investors against all frauds. We have incorporated
                            robust content management system for advanced protection and sustaining fast processes. All
                            the data of the company and its investors is encrypted and protected.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="adv-img img-100">
                        <img src="{{ asset('images/security.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row centered top-30 wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="col-lg-6 col-md-6  order-sm-12">
                    <div class="adv-con">
                        <h1>Guaranteed Income</h1>
                        <p>{{ config('myglobals.app_name') }} has a much diversified business portfolio. All the portfolios
                            of {{ config('myglobals.app_name') }} have been highly profitable. Having diversified business
                            structure in Digital Cloud mining has allowed us to promptly pay high returns to our
                            investors. Our major income comes from Digital Cloud mining which is the most efficient way
                            to mine crypto on the blockchain networks with high returns. Our experts are well-versed in
                            anticipating and estimating the market trend and design portfolio investment accordingly to
                            get highest profit. Our crypto mining team comes from different scientific disciplines and
                            constantly monitor latest innovations and implement them in order to benefit our investors.
                            We have large-scale industrial data centers with state-of-the-art technology to host the
                            diverse and complex mining environments. At {{ config('myglobals.app_name') }}, we’re using
                            world’s best ASIC (Application specific integrated circuit) and GPU (Graphics processing
                            unit) machines to generate best returns with high efficiencies..</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  order-sm-1">
                    <div class="adv-img img-100">
                        <img src="{{ asset('images/trad.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row centered top-30 wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="col-lg-6 col-md-6">
                    <div class="adv-con">
                        <h1>Profitable Strategy</h1>
                        <p>Cryptocurrency Mining is done by specialized computers. The role of miners is to secure the
                            network and to process every Bitcoin transaction. Here in {{ config('myglobals.app_name') }}
                            platform , we achieve this by solving a computational problems which allows us to chain
                            together blocks of transactions. For this service, we are rewarded with newly-created
                            Bitcoins and transaction fees. Mining is popular today and offers excellent opportunities to
                            earn extra money. {{ config('myglobals.app_name') }}_Miners has been the reliable address for
                            competitively priced cryptominers. Because we only supply profitable products, our customer
                            base are constantly increasing. We strive to keep our customers happy by offering quick
                            delivery and at the best online prices. offering support after purchase speaks for itself.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="adv-img img-100">
                        <img src="{{ asset('images/strategy.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sp section-gold wow fadeInUp" style="visibility: hidden; animation-name: none;">
        <div class="container">
            <div class="why-btc">
                <h3>Why Crypto?</h3>
                <h1>Secure Transaction Platform</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="why-btc__card">
                        <div class="btc-icon">
                            <div class="btc-icon-img">
                                <img src="{{ asset('images/btc/001-consulting.svg') }}" alt="">
                            </div>
                        </div>
                        <h4>Hedge Against Inflation</h4>
                        <p>Crypto Currency price has always tended to increase with the cost of living. Crypto has never
                            lost its value.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="why-btc__card">
                        <div class="btc-icon">
                            <div class="btc-icon-img">
                                <img src="{{ asset('images/btc/002-bitcoin.svg') }}" alt="">
                            </div>
                        </div>
                        <h4>Hedge Against Global Instability</h4>
                        <p>Crypto Currency never loses its value even during the times of wars, recession, social
                            unrest, etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="why-btc__card">
                        <div class="btc-icon">
                            <div class="btc-icon-img">
                                <img src="{{ asset('images/btc/003-bitcoin-1.svg') }}" alt="">
                            </div>
                        </div>
                        <h4>Speculate On Demand Growth</h4>
                        <p>As the demand for the crypto increases, the general market price of the Crypto Currency
                            automatically increases.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="why-btc__card">
                        <div class="btc-icon">
                            <div class="btc-icon-img">
                                <img src="{{ asset('images/btc/gold.svg') }}" alt="">
                            </div>
                        </div>
                        <h4>Reliability</h4>
                        <p>Cloud mining provide a reliable supply of crypto and it has been a very profitable sector for
                            years.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sp border-bt wow fadeInUp" style="visibility: hidden; animation-name: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="pay-m">
                        <h1>Supported Payment Methods</h1>
                        <h4>Simple &amp; secure access to buy, sell <br> and use Bitcoin</h4>
                        <div class="paylist">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><img src="{{ asset('images/crypto/btc-logo.png') }}" alt="">
                                            Bitcoin
                                        </li>
                                        <li><img src="{{ asset('images/crypto/eth-logo.png') }}" alt="">
                                            Ethereum
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6 mt-25">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pay-m-img">


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mr-top-50">
                    <div class="btc-info">
                        <div class="btc-info__img">
                            <img src="{{ asset('images/btc/buy/001-exchange.svg') }}" alt="">
                        </div>
                        <div class="btc-info__con">
                            <h4>Why Choose Us</h4>
                            <p>At this time when the world economy is suffering and the market is lucrative, it is very
                                important for you to know where exactly you should invest and which area will safeguard
                                your assets. <a href="why_us">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mr-top-50 xs-top-25">
                    <div class="btc-info">
                        <div class="btc-info__img">
                            <img src="{{ asset('images/btc/buy/002-bitcoin.svg') }}" alt="">
                        </div>
                        <div class="btc-info__con">
                            <h4>Stability And Reliability Of Crypto</h4>
                            <p>Crypto provides hedge against inflation, Crypto provides hedge against global
                                instability, Speculate on demand growth, Portfolio diversification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sp">
        <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
            <div class="section-title btm-50">
                <h5>Affiliate</h5>
                <h2>{{ config('myglobals.app_name') }} Affiliate Program</h2>
                <p>{{ config('myglobals.app_name') }} offers additional opportunities in the form of referral program and
                    binary
                    matching income. Anybody can become a member of our program by registering to our
                    program. To earn referral income, all you have to do is to share information about our
                    investment offer with your friends, family, acquaintances or colleagues, as well as send them
                    a unique referral link; after someone registers through your link, that person becomes your
                    referral.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="aff-con">
                        <div class="aff-cntr">
                            <img src="{{ asset('images/affl.jpg') }}" alt="">
                            <h3>Referral Income</h3>
                            <p>As and when a member refers another member for investing under his/her
                                own sponsor ID, the sponsor receives 10% as referral income on the member’s investment.
                                Referral income is pooled instantly.</p>
                            <div class="btn-g btn-cntr">
                                <a href="about">Read More<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right feather-icon">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 top-50-mb">
                    <div class="aff-con">
                        <div class="aff-cntr">
                            <img src="{{ asset('images/bin.jpg') }}" alt="">
                            <h3>GUARANTEED INCOME</h3>
                            <p>{{ config('myglobals.app_name') }} has a much diversified business portfolio. All the
                                portfolios of our Company have been highly profitable. Having diversified business
                                structure in Digital Cloud mining has allowed us to promptly pay high returns to our
                                investors. Please refer to our technical support for further details.</p>
                            <div class="btn-g btn-cntr">
                                <a href="about">Read More<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right feather-icon">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
