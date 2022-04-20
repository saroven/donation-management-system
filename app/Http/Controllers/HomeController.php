<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\DonationTypes;
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
        return view('public.home');
    }
    public function showAbout()
    {
        return view('public.home');
    }

    public function showDonatePage()
    {
        $donation_types =  DonationTypes::all();

        return view('public.donate', ['donation_types' => $donation_types]);
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
     public function addDonation(Request $request)
    {
        $this->validate($request, [
         'donationType' => 'required|integer',
         'donationName' => 'required|string|max:120',
         'donationQuantity' => 'required|integer',
         'donationWeight' => 'nullable|integer',
         'collectionAddress' => 'required|string|max:120',
         'donationNote' => 'required|string|max:256',
         ]);
//      'donationImages' => 'required|image|mimes:jpg,png,jpeg,gif',

            $donation = Donations::create([
            'user_id' => auth()->user()->id,
            'donation_type_id' => $request->donationType,
            'donation_name' => $request->donationName,
            'donation_quantity' => $request->donationQuantity,
            'donation_weight' => $request->donationWeight,
            'collection_address' => $request->collectionAddress,
            'note' => $request->donationNote,
        ]);
            if($donation->id){
                foreach ($request->file('donationImages') as $imagefile) {
                  $fileName = '';
                    if ($imagefile != null){
                        if (
                            $imagefile->getClientOriginalExtension() == 'jpg' ||
                            $imagefile->getClientOriginalExtension() == 'jpeg' ||
                            $imagefile->getClientOriginalExtension() == 'png' ||
                            $imagefile->getClientOriginalExtension() == 'gif'){
                            $fileName = time().'_donation.'.$imagefile->getClientOriginalExtension();
                            $imagefile->move(public_path('assets/donationImages'), $fileName);
                            $image = new Images;
                            $image->donation_id = $donation->id;
                            $image->path = 'assets/donationImages/'.$fileName;
                            $image->save();
                        }else{
                            Donations::find($donation->id)->delete();
                            return redirect()->back()->withInput()->with('error', "Image Extension must be jpg,jpeg,png,gif!");
                        }
                    }

               }

                return redirect()->back()->with('success', "Thanks For Donating.");
            }else{
                return redirect()->back()->with('error', "Something went wrong!");
            }

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
//        return auth()->user()->profile_pic;
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

                if ($request->has('password')){
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
