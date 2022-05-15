<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function viewSliders()
    {
        $sliders = Slider::all();
        return view('admin.sliders.slider', ['sliders' => $sliders]);
    }

    public function addSlider()
    {
        return view('admin.sliders.addSlider');

    }

    public function insertSlider(Request $request)
    {
        $request->validate([
                'short_title' => 'required|string|min:2|max:30',
                'long_title' => 'required|string|max:100',
                'slider_img' => 'required|image|mimes:jpg,png,jpeg,gif',
            ]);
        $slider = new Slider();
        $fileName = time().'_slider.'.$request->slider_img->getClientOriginalExtension();
        $request->slider_img->move(public_path('assets/sliders'), $fileName);

        $slider->short_title = $request->short_title;
        $slider->long_title = $request->long_title;
        $slider->slider_img = $fileName;
        $slider->save();

        return redirect()->route('sliders')->with('success','Added Successful');
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit', ['slider' =>$slider]);
    }

    public function updateSlider(Request $request, $id){
        $request->validate([
                'short_title' => 'required|string|min:2|max:30',
                'long_title' => 'required|string|max:100',
                'slider_img' => 'sometimes|image|mimes:jpg,png,jpeg,gif',
            ]);
        $slider = Slider::find($id);



         if ($request->slider_img != null){
                if ($slider->slider_img != null){
                    if (\File::exists(public_path().'/assets/sliders/'.$slider->slider_img)){
                        unlink(public_path('').'/assets/sliders/'.$slider->slider_img);
                    }
                }

                $fileName = time().'_slider.'.$request->slider_img->getClientOriginalExtension();
                $request->slider_img->move(public_path('assets/sliders'), $fileName);
            }

        $slider->short_title = $request->short_title;
        $slider->long_title = $request->long_title;
        $slider->slider_img = $fileName ?? $slider->slider_img;
        $slider->save();

        return redirect()->back()->with('success','Updated Successful');
    }
    public function deleteSlider($id){
        $slider = Slider::find($id);
        if ($slider->delete()){
            return redirect()->back()->with('success', 'Deleted Successful');
        }else{
            return redirect()->back()->with('error', 'Something went wrong! Please try again.');
        }

    }
}
