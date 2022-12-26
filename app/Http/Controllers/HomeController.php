<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentWallet;
use App\Models\Plan;
use App\Notifications\DepositCreatedNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dash.home');
    }

    /**
     * Show the application deposit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deposit()
    {
        $data = [
            'plans' => Plan::all(),
            'payment_wallets' => PaymentWallet::all(),
        ];

        return view('dash.deposit', $data);
    }

    /**
     * Store new deposit.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function confirm_deposit(Request $request)
    {
        // return $request;

        $values = $request->validate([
            'plan_id' => 'required',
            'amount' => 'required',
            'wallet_type' => 'required',
        ]);

        $plan = Plan::find($values['plan_id']);
        $amount = $values['amount'];

        if ($amount < $plan->min_deposit) {
            $amount = $plan->min_deposit;
        }

        $data = [
            'plan' => $plan,
            'amount' => $amount,
            'wallet' => PaymentWallet::find($values['wallet_type']),
        ];

        return view('dash.confirm_deposit', $data);
    }

    /**
     * Create payment
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_deposit(Request $request)
    {
        $values = $request->validate([
            'plan_id' => 'required',
            'amount' => 'required',
            'wallet_id' => 'required',
        ]);

        $user = auth()->user();

        $payment = new Payment();
        $payment->user_id = $user->id;
        $payment->payment_wallet_id = $values['wallet_id'];
        $payment->plan_id = $values['plan_id'];
        $payment->amount = $values['amount'];
        $payment->save();

        Notification::send($user, new DepositCreatedNotification($payment));

        return redirect()->route('deposit')->with('success', 'The deposit has been saved. It will become active when the administrator checks statistics and confirms the payment.');
    }

    /**
     * Show PnL calaculator page.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pnl_calculator(Request $request)
    {
        $plan = Plan::find($request->query('plan'));

        // return $plan; //? Debug

        $start_day = Carbon::today()->toFormattedDateString();
        $mining_days = $plan->mining_period / 24;
        $end_day = Carbon::today()->addDays($mining_days)->toFormattedDateString();

        $data = [
            'plan' => $plan,
            'from' => $start_day,
            'to' => $end_day,
        ];

        return view('dash.pnl_calculator', $data);
    }
}
