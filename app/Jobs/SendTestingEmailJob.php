<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Jobs\SendTestingEmailJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendTestingEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = ['name'=>'han win maung'];

        Mail::send('email.mail_test', $data, function ($message){
           $message->to('dev.hwn@gmail.com','han win maung')->subject('email subject');
           $message->from('laravelbasic@programming.com', 'Testing email');
        });
    }
}
