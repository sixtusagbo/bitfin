@extends('layouts.core')

@section('content')
    <section class="page-header hdr-company">
        <div class="container">
            <div class="page-title float-left d-inline-block">
                <h1>Why Choose Us</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right feather-icon">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg></li>
                    <li>Company</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right feather-icon">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg></li>
                    <li>Why Choose Us</li>
                </ul>
            </div>
            <div class="clearfix d-block d-sm-none"></div>
        </div>
    </section>

    <section class="section-sp">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <p>We are highly experienced in offering a variety of consulting service for more than 50 retirement plan
                platforms including 401(k), 403(b), 457, Profit Sharing, Defined Benefit and ESOPs. We service qualified
                plans with assets in excess of $70 Billion. Plus, Mining has excellent working relationships with dozens
                of investment companies so your provider likely already knows us. This inclusive market knowledge also
                helps us provide you with a global perspective that will help you create a solid mix of investment
                options in your plan. We devise solutions on behalf of cryptocurrency mining that balance the
                requirements of the projected parties, i.e., customers, suppliers and capital providers(investors). We
                have created and greatly benefit from our well- and long-established relationships with members of the
                global crypto-mining community in order to realize projects.
                We provide a multi-algorithm, multi-coin cloud mining service using the latest technology for most
                secured and efficient outputs.</p>
            <div class="row inv-top">
                <div class="col-lg-6">
                    <div class="img-100">
                        <img src="{{ asset('images/why-1.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>Mining is done by specialized computers. The role of miners is to secure the network and to
                        process every Bitcoin transaction. Here in Bitcoin Financial Ltd Company platform , we achieve
                        this by solving a computational problems which allows us to chain together blocks of
                        transactions. For this service, we are rewarded with newly-created Bitcoins and transaction
                        fees.</p>
                </div>
            </div>
            <div class="row inv-top">
                <div class="col-lg-6 order-sm-12">
                    <div class="img-100">
                        <img src="{{ asset('images/why-2.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6 order-sm-1">
                    <p>Since the crypto market is a decentralized market and the movements of digital assets are
                        volatile, it provides us with the opportunity to chance upon this criterion to mine digital
                        blocks. The volatility means there are higher chances for profits. Our expertise on cloud mining
                        allows us to take advantage of the volatility of the market and thus always keep us at profit.

                        We also invest in variety of assets through secure risk management strategy. We are also proud
                        to be associated with hedge funds and have had financed many promising hot companies that aren't
                        yet public. We have also some great private equity investments over the years. We also have our
                        investment in financial technology companies that will replace traditional banking using the
                        Internet and automation.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
