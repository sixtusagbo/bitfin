@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">user <span>login</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="strip">&nbsp;</div>
    <div class="loginwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    &nbsp;
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3><span>ENTER LOGIN</span> DETAILS</h3>
                    <div class="form-container loginpage">


                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <table width="100%" border=0 cellpadding=4 cellspacing=4>
                                <tr>
                                    <td>
                                        <span class="user">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email Address">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="password">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type=submit value="Login" class=sbmt>

                                        @if (Route::has('password.request'))
                                            <span class="loginbottom">
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Retrieve Password?') }}
                                                </a>
                                            </span>
                                        @endif
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
                    <h4><span>If you are new</span> to Bit-fin</h4>

                    <a href="{{ route('register') }}">Signup here</a>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
