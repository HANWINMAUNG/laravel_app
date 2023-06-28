<?php

namespace App\Http\Controllers;
use App\Jobs\SendTestingEmailJob;




class SendEmailController extends Controller
{
   public function sendEmail(){

    //    SendTestingEmailJob::dispatch();

    
    $receiver_email = 'receiver@hmue.com';
    dispatch(new SendTestingEmailJob($receiver_email));
       return back()->with('status','u are email is successfully.');
   }
}
