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
        $page = Page::find($id);
        if ($page != null) {
            //validate the request data
            $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|max:255',
                'content' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $page->title = $request->title; //update the title
            $page->content = $request->content; //update the content

            //page image upload
            if ($request->hasFile('image')) {
                if ($page->image != null) {
                    //delete the old image
                    $image_path = public_path() . '/assets/pageImages/' . $page->image;
                    if (file_exists($image_path)) {
                        unlink($image_path);
                    }
                }
                //upload the new image
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/pageImages'), $imageName);
                $page->image = $imageName;
            }

            $page->save(); //save the page

            return redirect()->back()->with('success', 'Page updated successfully');
        } else {
            return redirect()->route('dashboard')->with('error', 'Page not found');
        }
    }

    //page view as public
    public function viewPagePublic($slug) //view by slug
    {
        $page = Page::where('slug', $slug)->first(); //get the page by slug
        if ($page != null) { //if page exists
            return view('public.pages.viewPages', ['page' => $page]);
        } else {
            return redirect()->route('home')->with('error', 'Page not found');
        }
    }
}
