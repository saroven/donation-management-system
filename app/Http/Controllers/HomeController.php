<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\DonationTypes;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use App\Models\Images;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $sliders = Slider::all();
        return view('public.home', ['sliders'=> $sliders]);
    }
    public function showAbout()
    {
        return view('public.home');
    }

    public function showAboutPage()
    {
        $settings = Setting::first();
        return view('public.about', ['setting' => $settings]);
    }
    public function showProfilePage()
    {
        $totalDonations = User::find(auth()->user()->id)->donations;
        $pendingDonations = User::find(auth()->user()->id)->donations()->where('status', 0)->get();
        $successfulDonations = User::find(auth()->user()->id)->donations()->where('status', 1)->get();
        return view('public.profile', [
            'totalDonations' => $totalDonations,
            'pendingDonations' => $pendingDonations,
            'successfulDonations' => $successfulDonations
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);
            if($user) {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                     'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
                    'password' => ['nullable', 'string', 'min:6'],
                    'gender' => ['required', 'string'],
                    'address' => ['required', 'string', 'min:3'],
                    'mobile' => ['required', 'string', 'min:10'],
                    'profile_pic' => 'nullable|image|mimes:jpg,png,jpeg,gif',
                ]);

                $user->name = $request->name;
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->address = $request->address;
                $user->mobile = $request->mobile;

                if ($request->filled('password')){
                    $user->password = Hash::make($request->password);
                }

                if ($request->has('profile_pic')){
                    if (file_exists(auth()->user()->profile_pic)) {
                         unlink(auth()->user()->profile_pic);
                    }

                    $fileName = time().'_profile.'.$request->profile_pic->getClientOriginalExtension();
                    $request->profile_pic->move(public_path('assets/profilePic'), $fileName);
                    $user->profile_pic = 'assets/profilePic/'.$fileName;
                }
                $user->update();
                return redirect()->back()->with('success', "Updated Successful.");

            }else{
                  return redirect()->back()->with('error', "Something went wrong!");
            }
    }
}
