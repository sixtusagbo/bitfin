@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Edit <span>Account</span></h1>
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

                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf

                            @if (session('success'))
                                {{ session('success') }}
                            @endif
                            <div class="my_accont" style="margin:0">

                                <table width="100%" border=0 cellpadding=4 cellspacing=4>
                                    <tr>
                                        <td>Account Name:</td>
                                        <td>{{ Auth::user()->username }}</td>
                                    </tr>
                                    <tr>
                                        <td>Registration date:</td>
                                        <td>{{ Auth::user()->created_at->toDayDateTimeString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Your Full Name:</td>
                                        <td>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ Auth::user()->name }}" autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>New Password:</td>
                                        <td>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Retype Password:</td>
                                        <td>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" autocomplete="new-password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Bitcoin - BTC Wallet Address:</td>
                                        <td>
                                            <input id="btc_address" type="text"
                                                class="form-control @error('btc_address') is-invalid @enderror"
                                                name="btc_address" value="{{ old('btc_address') }}"
                                                autocomplete="btc_address" autofocus>

                                            @error('btc_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your Ethereum - ETH Wallet Address:</td>
                                        <td>
                                            <input id="eth_address" type="text"
                                                class="form-control @error('eth_address') is-invalid @enderror"
                                                name="eth_address" value="{{ old('eth_address') }}"
                                                autocomplete="eth_address" autofocus>

                                            @error('eth_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Your E-mail address:</td>
                                        <td>
                                            {{ Auth::user()->email }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="submit" value="Change Account data" class="sbmt">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
