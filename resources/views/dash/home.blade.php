@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">My <span>Dashboard</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="accwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('inc.accountnav')
                </div>
                <div class="col-lg-9">
                    <div class="member-container">

                        <div class="main_dash">
                            <div class="accstats">
                                <div class="accountbox"><span class="icon"><img
                                            src="{{ asset('images/auth/accountbox2.png') }}" alt=""></span>
                                    <p>Registration Date</p>
                                    <h4>{{ Auth::user()->created_at->toFormattedDateString() }}</h4>
                                </div>
                                <div class="accountbox"><span class="icon"><img
                                            src="{{ asset('images/auth/accountbox3.png') }}" alt=""></span>
                                    <p>Last Access</p>
                                    <h4>{{ Auth::user()->last_access }}</h4>
                                </div>
                                <div class="accountbox"><span class="icon"><img
                                            src="{{ asset('images/auth/accountbox4.png') }}" alt=""></span>
                                    <p>Your Ip</p>
                                    <h4>{{ request()->getClientIp() }}</h4>
                                </div>
                            </div>
                            <div class="accdetailsbox" style="margin-bottom:20px; margin-top:0px;">
                                <div class="head">Referral link <input type="text"
                                        style="display:inline-block; width:100%; margin-top:2px;" readonly="readonly"
                                        value="{{ Auth::user()->referral_link }}"></div>
                            </div>
                            <div class="acchead">
                                <div class="left">Account Balance <strong>$0.00</strong></div>
                                <div class="right">Earned Total <strong>$0.00</strong></div>
                            </div>
                            <div class="accdetailsbox">
                                <div class="head">Deposit Statements <span class="icon"><img
                                            src="{{ asset('images/auth/depstatement.png') }}" alt=""></span></div>
                                <div class="infos">
                                    <ul>
                                        <li>Active Deposit <strong>$0.00</strong></li>
                                        <li>Last Deposit <strong>$N/A</strong></li>
                                        <li>Total Deposit <strong>$0.00</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accdetailsbox">
                                <div class="head">Withdrawal Statements <span class="icon"><img
                                            src="{{ asset('images/auth/withdrwstatement.png') }}" alt=""></span>
                                </div>
                                <div class="infos">
                                    <ul>
                                        <li>Pending Withdrawal <strong>$0.00</strong></li>
                                        <li>Last Withdrawal <strong>$N/A</strong></li>
                                        <li>Withdrew Total <strong>$0.00</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
