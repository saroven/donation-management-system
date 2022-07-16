<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactPage()
    {
        return view('public.contact');
    }

    public function sendContactMessage(Request $request)
    {
        $request->validate([
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|email|min:3|max:100',
                'subject' => 'required|string|min:3|max:120',
                'phone' => 'required|min:10|max:11',
                'message' => 'required|string|min:3|max:1000'
            ]);
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->phone = $request->phone;
            $contact->message = $request->message;

            if ($contact->save()) {
                $receiverEmailAddress = "ashah3562@gmail.com";
                Mail::to($receiverEmailAddress)
                ->send(new ContactForm($contact));
                return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
            } else {
                return redirect()->route('contact')->with('error', 'Something went wrong. Please try again later');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
