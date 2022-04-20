<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\DonationTypes;
use App\Models\Images;
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
}
