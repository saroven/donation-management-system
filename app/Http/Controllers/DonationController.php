<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Donations;
use App\Models\DonationTypes;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function showDonations()
    {
        $donations= Donations::all();

        return view('admin.donations.view', ['donations' => $donations]);
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
}
