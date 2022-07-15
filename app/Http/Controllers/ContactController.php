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
            'name' => 'string|required|min:3|max:255',
            'email' => 'required|email|min:3|max:100',
            'subject' => 'string|required|min:3|max:120',
            'phone' => 'required|min:10|max:11',
            'message' => 'string|required|min:3|max:1000'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        $receiverEmailAddress = "ashah3562@gmail.com";

        Mail::to($receiverEmailAddress)
            ->send(new ContactForm($contact));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');


        return $request->all();
    }
}
