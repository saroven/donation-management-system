<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDashboard()
    {

        return view('admin.dashboard', [
            'allDonation' => Donations::all(),
            'successfulDonation' => Donations::where('status', 1)->get(),
            'pendingDonation' => Donations::where('status', 0)->get(),
            'users' => User::all()
        ]);
    }
}
