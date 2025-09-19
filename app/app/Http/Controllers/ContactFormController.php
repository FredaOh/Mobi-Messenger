<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
//        $requestData = $request->all();

        $name = $request->input('full-name');
        $email = $request->input('email');
        $message = $request->input('message');

        $contactMailer = new ContactMail(name: $name, email: $email, message: $message);

        Mail::to("clientservices@mobivs.com")
            ->send($contactMailer);

        return redirect('/');
    }
}
