<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showUsers()
    {
        return view('admin.users.view');
    }

    public function fetchUsers()
    {
       $users = User::all();
       return response()->json([
           'users' => $users
       ]);
    }
    public function getSingleUser($id)
    {
       $user = User::find($id);
       if ($user){
           return response()->json([
           'user' => $user
       ]);
       }else{
           return response()->json([
               'status'=> 400,
                'message' => "User Not Found",
           ]);
       }
    }

    public function addUser(Request $request)
    {
        $userValidation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'min:3'],
            'mobile' => ['required', 'string', 'min:10'],
            'user_type' => ['required', 'string'],
        ]);

       if($userValidation->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $userValidation->messages(),
            ]);
       }else{
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->mobile = $request->mobile;
            $user->user_type = $request->user_type;

            $user->save();

            return response()->json([
                'status' => 200,
                'message' => 'Added Successful',
            ]);
       }
    }

    public function editUser($id)
    {
         $user = User::find($id);

        if($user){
            return response()->json([
                'status' => 200,
                'user' => $user
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'message' => "User Not found"
            ]);
        }
    }

    public function updateUser(Request $request, $id)
    {
        $userValidation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
             'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => ['required', 'string', 'min:6'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'min:3'],
            'mobile' => ['required', 'string', 'min:10'],
            'user_type' => ['required', 'string'],
        ]);

       if($userValidation->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $userValidation->messages(),
            ]);
       }else{
            $user = User::find($id);
            if($user){
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->gender = $request->gender;
                $user->address = $request->address;
                $user->mobile = $request->mobile;
                $user->user_type = $request->user_type;
                $user->update();
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
