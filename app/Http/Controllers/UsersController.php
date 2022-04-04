<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUsers()
    {
        return view('admin.users.users');
    }
    public function addUser()
    {
        return view('admin.users.add');
    }
}
