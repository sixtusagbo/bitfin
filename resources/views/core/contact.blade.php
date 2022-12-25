@extends('layouts.core')

@section('content')
    <section class="page-header hdr-con">
        <div class="container">
            <div class="page-title float-left d-inline-block">
                <h1>Contact</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right feather-icon">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg></li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="clearfix d-block d-sm-none"></div>
        </div>
    </section>

    <div class="p-5 d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 order-sm-1 top-40-mb">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact contact--address">
                        <h4>Address</h4>
                        <p>13b Gatwick Gate Industrial Estate, Lowfield Heath, Crawley, England</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact contact--cnum">
                        <h4>ASIC Registration ID</h4>
                        <p>Company ID - 12932219</p>

                        <div class="btn-g mt-4">
                            <a href="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}" target="_blank">See Details<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right feather-icon">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg></a>
                        </div>
                    </div>
                    <div class="contact contact--cnum mt-3">
                        <h4>INSURANCE ID</h4>
                        <p>ID - 81 175 311 937</p>
                        <p>
                        <div id="ytWidget"></div>
                        <script
                            src="../translate.yandex.net/website-widget/v1/widget56725672.js?widgetId=ytWidget&amp;pageLang=en&amp;widgetTheme=light&amp;autoMode=true"
                            type="text/javascript"></script>
                        </p>
                        <div class="btn-g mt-4">
                            <a href="{{ asset('images/certificate/cert-scrshot-01.jpg') }}" target="_blank">See Details<svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right feather-icon">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
