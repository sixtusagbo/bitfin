@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Contact <span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="strip">&nbsp;</div>
    <div class="inside_wrap howtorefer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="supportleft">
                        <h2>Do You have <strong>any questions?</strong></h2>
                        <p>We strongly recommend that you start searching for the necessary information in the FAQ section.
                            If you
                            need advice or technical assistance, do not hesitate to contact our specialists. Customer
                            support is
                            available around the clock. You just need to send a letter or a request via the feedback form to
                            promptly receive the necessary assistance. Remember that the more detailed the description of
                            your
                            problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a
                            registered
                            user of the website.</p>
                        <a href="{{ route('faq') }}">Need Help? Visit FAQs</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="supportright">
                        <div class="supportboxes"><span class="icon"><img
                                    src="{{ asset('images/auth/contactlocation.png') }}" alt=""></span>
                            <h4>Address</h4>
                            <p>13b Gatwick Gate Industrial Estate, Lowfield Heath, Crawley, England</p>
                        </div>
                        <div class="supportboxes"><span class="icon"><img
                                    src="{{ asset('images/auth/contactemail.png') }}" alt=""></span>
                            <h4>email</h4>
                            <p><a href="mailto:{{ config('myglobals.socials.email') }}"
                                    style="color: #ccc;">{{ config('myglobals.socials.email') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="inside_wrap supportpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">&nbsp;</div>
                <div class="col-lg-8">
                    <div class="form-content">
                        <h2><span>Send Us</span> a Message</h2>
                        <form>
                            <table width="100%" border=0 cellpadding=0 cellspacing=0>

                                <tr>
                                    <td width="49%">
                                        <label>Your Name</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                    <td>&nbsp;</td>
                                    <td width="49%">
                                        <label>Your Email</label>
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
                                    <td colspan="3"><label>Your Message</label>
                                        <textarea name="message" class="form-control" cols="45" rows="4" style="height:94px"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="60" colspan="6" align="center" valign="bottom">
                                        {{-- <input type="submit" value="Send" class="sbmt"> --}}
                                        <a href="mailto:{{ config('myglobals.socials.email') }}" class="btn btn-warning"
                                            style="color: #000">SEND</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">&nbsp;</div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
@endsection
