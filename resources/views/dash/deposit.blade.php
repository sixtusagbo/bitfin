@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Make A <span>Deposit</span></h1>
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
                            <h1>{{ session('success') }}</h1>
                        @endif

                        <form method="POST" name="spendform" action="{{ route('confirm_deposit') }}">
                            @csrf


                            <script language="javascript">
                                function openCalculator(id) {
                                    w = 300;
                                    h = 400;
                                    t = (screen.height - h - 30) / 2;
                                    l = (screen.width - w - 30) / 2;
                                    window.open('/pnl_calculator?a=calendar&plan=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" +
                                        w +
                                        ",height=" + h + ",resizable=1,scrollbars=0");
                                }
                            </script>

                            @forelse ($plans as $plan)
                                <div class="my_accont">
                                    <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                        <tr>
                                            <td colspan="3">
                                                <input type="radio" name="plan_id" value="{{ $plan->id }}"
                                                    @if ($plan->id == 1) checked @endif>
                                                <b>{{ $plan->return }}% After {{ $plan->mining_period / 24 }} Day(s)</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=inheader>Plan</td>
                                            <td class=inheader width=200>Amount</td>
                                            <td class=inheader width=100 nowrap>
                                                <nobr> Profit (%)</nobr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=item>{{ $plan->name }}</td>
                                            <td class=item align=right>
                                                @if ($plan->min_deposit == 1)
                                                    &#x20BF;1.00 BTC
                                                @else
                                                    @money($plan->min_deposit)
                                                @endif
                                                -
                                                @if ($plan->max_deposit == null)
                                                    Unlimited
                                                @else
                                                    @money($plan->max_deposit)
                                                @endif
                                            </td>
                                            <td class=item align=right>{{ $plan->return }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=3 align=right><a
                                                    href="javascript:openCalculator('{{ $plan->id }}')">Calculate
                                                    your
                                                    profit
                                                    &gt;&gt;</a></td>
                                        </tr>
                                    </table>
                                </div>
                                <br><br>
                            @empty
                                <div class="alert alert-warning" role="alert">
                                    Admin please run your migrations!
                                </div>
                            @endforelse

                            <div class="my_accont">
                                <div class="payment-balance">
                                    <p>AMOUNT TO SPEND:</p>
                                    <input type="text" name="amount" value="100.00" class="fullwidthinput"
                                        size="15">
                                </div>
                                <div class="depositactive">
                                    <table width="100%" border=0 cellpadding=2 cellspacing=0>
                                        <tr>
                                            <th>Payment Processor</th>
                                        </tr>
                                        <tr>
                                            <td>

                                                @forelse ($payment_wallets as $wallet)
                                                    <div class="payment-processor">
                                                        <input type="radio" name="wallet_type" value="{{ $wallet->id }}"
                                                            checked>
                                                        {{ $wallet->name }}
                                                    </div>
                                                @empty
                                                    <div class="alert alert-warning" role="alert">
                                                        Admin please run your migrations!
                                                    </div>
                                                @endforelse
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                    <td colspan=2><input type=submit value="Spend" class=sbmt></td>
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
