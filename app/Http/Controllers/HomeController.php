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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showHome()
    {
        return view('public.home');
    }
    public function showAbout()
    {
        return view('public.home');
    }

    public function showDonatePage()
    {
        return view('public.donate');
    }
    public function showDonationsPage()
    {
        return view('public.donations');
    }
    public function showContactPage()
    {
        return view('public.contact');
    }
    public function showAboutPage()
    {
        return view('public.about');
    }
}
