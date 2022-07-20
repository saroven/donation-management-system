<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function viewPage($id) //
    {
        return view('admin.pages.editPage', ['page' => Page::find($id)]);
    }

    public function updatePage(Request $request, $id) //update page with id
    {
        return 'update page with id: '.$id;
    }
}
