<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {

        $receiverEmailAddress = "ashah3562@gmail.com";

        Mail::to($receiverEmailAddress)
            ->send(new ContactForm);

            return "Email has been sent successfully.";

    }
}
