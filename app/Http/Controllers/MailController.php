<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class MailController extends Controller
{
    //
    public function sendContactForm(Request $request) {
        Mail::to('dkovbasin@yandex.ru')->send(new ContactForm(
            $request->nameFeedback,
            $request->emailFeedback,
            $request->subjectFeedback,
            $request->messageFeedback));

        return view('thanks');
    }
}
