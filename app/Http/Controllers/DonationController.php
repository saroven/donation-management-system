<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use App\Models\Donations;
use App\Models\DonationTypes;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    //for admin...
    public function showDonations()
    {
        $donations= Donations::all();


        return view('admin.donations.view', ['donations' => $donations]);
    }

    public function donationDetails($id)
    {
        $donation= Donations::find($id);


        return view('admin.donations.details', ['donation' => $donation]);
    }

    public function updateDonationDetails(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|integer|max:2'
        ]);
        $donation = Donations::find($id);

        if ($donation){
            $donation->status = $request->status;

            $donation->update();
            return redirect()->back()->with('success', 'Updated Successful');
        }
    }

    public function addDonation(Request $request)
    {
        return $request->all();
        foreach ($request->file('images') as $imagefile) {
         $image = new Image;
         $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
         $image->url = $path;
         $image->product_id = $product->id;
         $image->save();
       }
    }
    public function showDonationTypes()
    {
        return view('admin.donations.types.view');
    }
    public function fetchDonationTypes()
    {
       $types = DonationTypes::all();

       return response()->json([
           'types' => $types
       ]);
    }

//donation type for admin...
    public function addDonationType(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);


       if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
       }else{
            $type = new DonationTypes();

            $type->name = $request->name;
            $type->save();

            return response()->json([
                'status' => 200,
                'message' => 'Added Successful',
            ]);
       }
    }

    public function editType($id)
    {
        $types = DonationTypes::find($id);

        if($types){
            return response()->json([
                'status' => 200,
                'types' => $types
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'message' => "Student Not found"
            ]);
        }
    }

    public function updateType(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

       if($validation->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validation->messages(),
            ]);
       }else{
            $type = DonationTypes::find($id);
            if($type){
                $type->name = $request->name;
                $type->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Updated Successful',
                ]);

            }else{
                return response()->json([
                    'status' => 400,
                    'message' => "Student Not found"
                ]);
            }
       }

    }


    public function deleteType($id)
    {
            $type = DonationTypes::find($id);
            if($type){
                $type->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Deleted Successful',
                ]);

            }else{
                return response()->json([
                    'status' => 400,
                    'message' => "Student Not found"
                ]);
            }
       }

//   for user...
    public function showDonationsPage()
    {
        $donations = Donations::where('status', 0)->get();

        return view('public.donations', ['donations' => $donations]);
    }
    public function showDonatePage()
    {
        $donation_types =  DonationTypes::all();

        return view('public.donate', ['donation_types' => $donation_types]);
    }
     public function makeDonation(Request $request)
    {
        $user = User::find(auth()->user->id);
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

    public function showUserDonations(Request $request)
    {
       if (!isset($request->filter)){
           $filter = 'all-donations';
       }else{
           $filter =  $request->filter;
       }

        if ($filter== 'all-donations'){
            $donations = User::find(auth()->user()->id)->donations;
        }elseif ($filter== 'successful-donations'){
            $donations = User::find(auth()->user()->id)->donations()->where('status', 1)->get();
        }elseif ($filter== 'pending-donations'){
            $donations = User::find(auth()->user()->id)->donations()->where('status', 0)->get();
        }
        return view('public.userDonations', ['filter' => $filter, 'donations' => $donations]);
    }

    public function getDonationDetails($id)
    {
        $donation = Donations::find($id);
        if($donation){
            return response()->json([
                'status' => 200,
                'donation' => $donation,
                'donor' => $donation->donor
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'msg' => 'No Donation Data found',
            ]);
        }

    }
}
