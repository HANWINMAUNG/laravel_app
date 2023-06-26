<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendTestingEmailJob;
use App\Http\Controllers\SendEmailController;



class SendEmailController extends Controller
{
   public function sendEmail(){
       SendTestingEmailJob::dispatch();
       return back()->with('status','u are email is successfully.');
   }
}
