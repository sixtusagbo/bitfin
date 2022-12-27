@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow">Your <span>Deposits</span></h1>
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


                        <div class="detailed-stats-box">
                            Total: <strong>@money($active_deposits)</strong>
                        </div>

                        @forelse ($plans as $plan)
                            <div class="my_accont">
                                <table cellspacing=1 cellpadding=2 border=0 width=100% class=line>
                                    <tr>
                                        <td class=item>
                                            <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                                <tr>
                                                    <td colspan=3 align=center>
                                                        <div class="plan-title">{{ $plan->return }}% After
                                                            {{ $plan->mining_period / 24 }} Day(s)</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=inheader>Plan</td>
                                                    <td class=inheader width=200>Amount Spent (@if ($plan->max_deposit == null)
                                                            &#x20BF;
                                                        @else
                                                            $
                                                        @endif)</td>
                                                    <td class=inheader width=100 nowrap>
                                                        <nobr> Profit (%)</nobr>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=item>{{ $plan->name }}</td>
                                                    <td class=item align=right>@money($plan->min_deposit) - @money($plan->max_deposit)</td>
                                                    <td class=item align=right>{{ $plan->return }}</td>
                                                </tr>
                                            </table>
                                            <br>

                                            @if ($currentUserPayments->count() > 0)
                                                <table class="">
                                                    <thead>
                                                        <tr class="mi-table-info">
                                                            <th class="ps-4">DEPOSIT AMOUNT</th>
                                                            <th>PAYMENT CHANNEL</th>
                                                            <th>STATUS</th>
                                                            <th>DATE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @forelse ($currentUserPayments->where('plan_id', $plan->id)->where('status', '>', 0) as $payment)
                                                            <tr>
                                                                <td>
                                                                    @money($payment->amount)
                                                                </td>
                                                                <td>{{ $payment->wallet->name }}
                                                                </td>
                                                                <td>
                                                                    @switch($payment->status)
                                                                        @case(0)
                                                                            <span class="btn btn-warning">Pending</span>
                                                                        @break

                                                                        @case(1)
                                                                            <span class="btn btn-success">Running</span>
                                                                        @break

                                                                        @case(2)
                                                                            <span class="btn btn-default">Completed</span>
                                                                        @break

                                                                        @default
                                                                    @endswitch
                                                                </td>
                                                                <td>{{ $payment->created_at->toDayDateTimeString() }}
                                                                </td>
                                                            </tr>
                                                            @empty
                                                                <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                                                    <tr>
                                                                        <td colspan=4>
                                                                            <div class="alert alert-info">No deposits for this
                                                                                plan
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            @endforelse

                                                        </tbody>

                                                    </table>
                                                @else
                                                    <table cellspacing=1 cellpadding=2 border=0 width=100%>
                                                        <tr>
                                                            <td colspan=4>
                                                                <div class="alert alert-info">No deposits for this plan
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                @endif
                                                <br>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                @empty
                                    <div class="alert alert-warning" role="alert">
                                        Admin please run your migrations!
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="strip">&nbsp;</div>
            <div class="strip">&nbsp;</div>
        @endsection
