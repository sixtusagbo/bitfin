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

                        @if (session('success'))
                            <h4>{{ session('success') }}</h4>
                        @endif

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

                            @if (Auth::user()->earnings == 0)
                                You have no funds to withdraw.
                            @else
                                <center>
                                    <a class="btn btn-info" data-toggle="modal" role="button"
                                        href="#createWithdrawalModal">
                                        Withdraw
                                    </a>
                                </center>
                            @endif
                        </div>

                        @if (Auth::user()->earnings > 0)
                            <div class="my_accont">
                                <table class="">
                                    <thead>
                                        <tr class="mi-table-info">
                                            <th>AMOUNT</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse (Auth::user()->withdrawals as $withdrawal)
                                            <tr>
                                                <td>
                                                    @money($withdrawal->amount)
                                                </td>
                                                <td>
                                                    @switch($withdrawal->status)
                                                        @case(0)
                                                            <span class="btn btn-warning">Pending</span>
                                                        @break

                                                        @case(1)
                                                            <span class="btn btn-success">Approved</span>
                                                        @break

                                                        @default
                                                    @endswitch
                                                </td>
                                                <td>{{ $withdrawal->created_at->toDayDateTimeString() }}
                                                </td>
                                            </tr>
                                            @empty
                                                <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                                    <tr>
                                                        <td colspan=4>
                                                            <div class="alert alert-info">No withdrawals yet</div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                            @endif
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="strip">&nbsp;</div>
        <div class="strip">&nbsp;</div>

        <!------------------ Create withdrawal request modal --------------------------------->
        <div class="modal fade" id="createWithdrawalModal" tabindex="-1" role="dialog"
            aria-labelledby="createWithdrawalModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="createWithdrawalModalLabel">Make withdrawal request</h4>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => 'withdrawals.store']) !!}
                        <label for="amount" class="form-label">Enter
                            amount</label>
                        <input type="number" name="amount" {{ 'max=' . Auth::user()->earnings }} class="form-control"
                            required>
                        <br>

                        <div class="">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
