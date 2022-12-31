@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Your <span>Referrals</span></h1>
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

                        <div class="acchead">
                            <div class="left">Total Referrals
                                <strong>{{ Auth::user()->referrals->count() }}(Active)</strong>
                            </div>
                            <div class="right">Earned Commission <strong>@money(Auth::user()->referrals->count() * 10)</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
