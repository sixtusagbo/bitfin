@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Withdraw <span>Funds</span></h1>
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
                            <div class="left">Account Balance <strong>@money(Auth::user()->account_balance)</strong></div>
                            <div class="right">Pending Withdrawals <strong>@money(Auth::user()->pending_withdrawals)</div>
                        </div>


                        <div class="my_accont">
                            <table width="100%" border=0 cellpadding=2 cellspacing=0>
                                <tr>
                                    <td class="inheader"></td>
                                    <td class="inheader">Processing</td>
                                    <td class="inheader">Available</td>
                                    <td class="inheader">Pending</td>
                                    <td class="inheader">Account</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><img src="{{ asset('images/auth/btc_logo.png') }}" width="40" height="35"
                                            align="absmiddle"> Bitcoin - BTC
                                    </td>
                                    <td><b style="color:green">$0.00</b></td>
                                    <td><b style="color:red">$0.00</b></td>
                                    <td><a href="{{ url('/edit_account') }}" class="btn btn-info">Edit</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><img src="{{ asset('images/auth/eth_logo.png') }}" width="30" height="35"
                                            align="absmiddle"> Ethereum - ETH
                                    </td>
                                    <td><b style="color:green">$0.00</b></td>
                                    <td><b style="color:red">$0.00</b></td>
                                    <td><a href="{{ url('/edit_account') }}" class="btn btn-info">Edit</a></td>
                                </tr>


                            </table>
                            <br><br>
                            You have no funds to withdraw.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
