<?php

namespace App\Jobs;


use App\Mail\SendTestingMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailer;
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
    
    protected $receiver_email;

    public function __construct($receiver_email)
    {
        
        $this->receiver_email = $receiver_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $subject = 'Welcome';
        $name = 'John';
        $mailer->to($this->receiver_email, 'user name')
                  ->send(new SendTestingMail($subject,$name));

        // $data = ['name'=>'han win maung'];

        // Mail::send('email.mail_test', $data, function ($message){
        //    $message->to('dev.hwn@gmail.com','han win maung')->subject('email subject');
        //    $message->from('laravelbasic@programming.com', 'Testing email');
        // });
    }
}
