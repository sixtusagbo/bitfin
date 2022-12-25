@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">New <span>User</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="loginwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    &nbsp;
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-container loginpage">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <table width="100%" border=0 cellpadding=4 cellspacing=4>
                                <tr>
                                    <td colspan="2">
                                        <h3><span>Account</span> Information</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">Your Full Name:</td>
                                    <td>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Username:
                                    </td>
                                    <td>
                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" required autocomplete="username" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Define Password:
                                    </td>
                                    <td>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Retype Password:
                                    </td>
                                    <td>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your E-mail:
                                    </td>
                                    <td>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Retype E-mail:
                                    </td>
                                    <td>
                                        <input id="email_confirmation" type="email" class="form-control"
                                            name="email_confirmation" required autocomplete="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Secret question:
                                    </td>
                                    <td>
                                        <input id="secret_question" type="text"
                                            class="form-control @error('secret_question') is-invalid @enderror"
                                            name="secret_question" value="{{ old('secret_question') }}" required
                                            autocomplete="secret_question" autofocus>

                                        @error('secret_question')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Secret answer:
                                    </td>
                                    <td>
                                        <input id="secret_answer" type="text"
                                            class="form-control @error('secret_answer') is-invalid @enderror"
                                            name="secret_answer" value="{{ old('secret_answer') }}" required
                                            autocomplete="secret_answer" autofocus>

                                        @error('secret_answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <br />
                                        <h3><span>Payment</span> Systems</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bitcoin - BTC Wallet Address:
                                    </td>

                                    <td>
                                        <input id="btc_address" type="text"
                                            class="form-control @error('btc_address') is-invalid @enderror"
                                            name="btc_address" value="{{ old('btc_address') }}" required
                                            autocomplete="btc_address" autofocus>

                                        @error('btc_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ethereum - ETH Wallet Address:
                                    </td>
                                    <td>
                                        <input id="eth_address" type="text"
                                            class="form-control @error('eth_address') is-invalid @enderror"
                                            name="eth_address" value="{{ old('eth_address') }}" required
                                            autocomplete="eth_address" autofocus>

                                        @error('eth_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input type=checkbox name=agree value=1>
                                        I agree with
                                        <a class="small_text" href="{{ url('/rules') }}">
                                            Terms and conditions
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input type=submit value="Register" class=sbmt>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="loginpanelbottoms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4><span>Already a member?</span> Login Now!</h4>

                    <a href="{{ route('login') }}">login here</a>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
