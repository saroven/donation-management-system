<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //view all pages
    public function viewPages()
    {
        return 'view all pages';
    }

    public function viewPage($id) //
    {
        return 'view page with id: '.$id;
    }

    public function editPage($id) //edit page with id
    {
        return 'edit page with id: '.$id;
    }
    public function updatePage(Request $request, $id) //update page with id
    {
        return 'update page with id: '.$id;
    }
}
