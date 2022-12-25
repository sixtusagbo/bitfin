<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    /**
     * Display the base home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'plans' => Plan::all(),
        ];

        return view('core.welcome', $data);
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('core.about');
    }

    /**
     * Display the why_us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function why_us()
    {
        return view('core.why_us');
    }

    /**
     * Display the forex_trading page.
     *
     * @return \Illuminate\Http\Response
     */
    public function forex_trading()
    {
        return view('core.forex_trading');
    }

    /**
     * Display the commitments page.
     *
     * @return \Illuminate\Http\Response
     */
    public function commitments()
    {
        return view('core.commitments');
    }
}
