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
        Log::debug('Input data', $request->all());
        // return redirect('/');
        Mail::to("clientservices@mobivs.com")
        ->send(new ContactMail());
        
          $name = $request->input('full-name');
         

        

       
    }
}
