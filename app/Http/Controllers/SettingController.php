<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function showSettingsPage()
    {
        $settings = Setting::first();
        return view('admin.settings.settings', ['setting' => $settings]);
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        if($setting){
            //have data

            $request->validate([
                'site_title' => 'required|string|min:2|max:50',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:11',
                'address' => 'required|string|max:255',
                'about_title' => 'required|string|max:100',
                'about_content' => 'required|string|max:255',
                'logo' => 'sometimes|image|mimes:jpg,png,jpeg,gif',
                'icon' => 'sometimes|required|file',
                'about_img' => 'sometimes|required|file',
            ]);


            if ($request->logo != null){
                if ($setting->logo != null){
                    if (\File::exists(public_path().'/assets/logo/'.$setting->logo)){
                        unlink(public_path().'/assets/logo/'.$setting->logo);
                    }
                }
                $logofileName = time().'_logo.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('assets/logo'), $logofileName);
            }

            if ($request->icon != null){
                 if ($setting->icon != null){
                    if (\File::exists(public_path().'/assets/icon/'.$setting->icon)){
                        unlink(public_path().'/assets/icon/'.$setting->icon);
                    }
                 }
                $iconfileName = time().'_icon.'.$request->icon->getClientOriginalExtension();
                $request->icon->move(public_path('assets/icon'), $iconfileName);
            }

            if ($request->about_img != null){
                if ($setting->about_img != null){
                    if (\File::exists(public_path().'/assets/about_img/'.$setting->about_img)){
                        unlink(public_path().'/assets/about_img/'.$setting->about_img);
                    }
                }

                $aboutfileName = time().'_about_img.'.$request->about_img->getClientOriginalExtension();
                $request->about_img->move(public_path('assets/about_img'), $aboutfileName);
            }

            Setting::where('id', $setting->id) //update first row
                ->update([
                    'site_title' => $request->site_title,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'about_title' => $request->about_title,
                    'about_content' => $request->about_content,
                    'logo' => $logofileName ?? $setting->logo,
                    'icon' => $iconfileName ?? $setting->icon,
                    'about_img' => $aboutfileName ?? $setting->about_img
                ]);
            return redirect()->back()->with('success', 'Updated successful');
        }else{
            //don't have data
            $request->validate([
                'site_title' => 'required|string|min:2|max:50',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:11',
                'address' => 'required|string|max:255',
                'logo' => 'sometimes|required|file',
                'icon' => 'sometimes|required|file',
                'about_img' => 'sometimes|required|file',
            ]);
            if ($request->logo != null){
                $logofileName = time().'_logo.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('assets/logo'), $logofileName);
            }

            if ($request->icon != null){
                $iconfileName = time().'_icon.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('assets/icon'), $iconfileName);
            }

            if ($request->about_img != null){
                $aboutfileName = time().'_about.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('assets/about'), $aboutfileName);
            }
             Setting::insert([
                    'site_title' => $request->site_title,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'about_title' => $request->about_title,
                    'about_content' => $request->about_content,
                    'logo' => $logofileName ?? null,
                    'icon' => $iconfileName ?? null,
                    'about_img' => $aboutfileName ?? null,
                ]);
            return redirect()->back()->with('success', 'Inserted successful');
        }
    }
}
