@extends('layouts.core')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="page-title float-left d-inline-block">
                <h1>Security Information</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right feather-icon">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg></li>
                    <li>Security Information</li>
                </ul>
            </div>
            <div class="clearfix d-block d-sm-none"></div>
        </div>
    </section>

    <section class="section-sp terms">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h3>Security Information</h3>
            <p>Bitcoin Financial Company is an authentic company with EV SSL Certificate. Our website is very
                secure and guarantees safety of our investors against all frauds. We have provided Digital
                Share Certificate, Tax Returns and Certification of Incorporation to the Certification
                Authority and after reviewing our genuineness, we have been provided with EV SSL
                Certificate. We have incorporated robust content management system for advanced
                protection and sustaining fast processes. All the data of the company and its investors is
                encrypted and protected.</p>
        </div>
    </section>
@endsection
