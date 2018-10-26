<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function referral()
    {
        return 'http://example.test/?ref=' . \Hashids::encode(auth()->user()->id);
    }

    public function referrer()
    {
        return auth()->user()->referrer;
    }

    public function referrals()
    {
        return auth()->user()->referrals;
    }
}
