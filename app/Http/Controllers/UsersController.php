<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function addUser()
    {
        return view('admin.users.add');
    }
}
