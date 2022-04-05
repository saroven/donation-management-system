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
        $users = User::get();
        return view('admin.users.users', ['users' => $users]);
    }
    public function addUser()
    {
        return view('admin.users.add');
    }
}
