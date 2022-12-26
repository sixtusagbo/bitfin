@extends('layouts.dash')

@section('content')
    <div class="bannerwrap insideheaders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="bounceInDown wow" style="visibility: visible; animation-name: bounceInDown;">Confirm Deposit
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="strip">&nbsp;</div>
    <div class="inside_wrap rules">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h3>Please confirm your deposit:</h3><br><br>

                    Please send your payment in {{ $wallet->name }} to this wallet: <b>
                        <p>
                            <span id="addressToCopy" style="color:red;">
                                {{ $wallet->address }}
                            </span>
                            <span class="text-primary" onclick="copyToClipboard('addressToCopy')">Click
                                to copy</span>
                        </p>
                    </b>

                    <table cellspacing="0" cellpadding="2" class="form deposit_confirm">
                        <tbody>
                            <tr>
                                <th>Profit:</th>
                                <td>{{ $plan->return . '%' }} after {{ $plan->mining_period / 24 }} day(s)</td>
                            </tr>
                            <tr>
                                <th>Principal Return:</th>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <th>Principal Withdraw:</th>
                                <td>
                                    Not available </td>
                            </tr>

                            <tr>
                                <th>Credit Amount:</th>
                                <td>
                                    @if ($plan->max_deposit == null)
                                        &#x20BF;{{ $amount }}
                                    @else
                                        {{ '$' . $amount }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Deposit Fee:</th>
                                <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                            </tr>
                            <tr>
                                <th>Debit Amount:</th>
                                <td>
                                    @if ($plan->max_deposit == null)
                                        &#x20BF;{{ $amount }}
                                    @else
                                        {{ '$' . $amount }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>

                    {!! Form::open(['route' => 'create_deposit']) !!}
                    {!! Form::hidden('plan_id', $plan->id) !!}
                    {!! Form::hidden('amount', $amount) !!}
                    {!! Form::hidden('wallet_id', $wallet->id) !!}

                    <input type="submit" value="Save" class="sbmt"> &nbsp;
                    <input type="button" class="sbmt" value="Cancel" onclick="document.location='/deposit'">
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection

@section('script')
    <script>
        function copyToClipboard(elementId) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(elementId));
                range.select().createTextRange();
                document.execCommand("copy");
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(elementId));
                window.getSelection().removeAllRanges(); // clear current selection
                window.getSelection().addRange(range); // to select text
                document.execCommand("copy");
                window.getSelection().removeAllRanges(); // to deselect
            }
            alert("Address has been copied")
        }
    </script>
@endsection
