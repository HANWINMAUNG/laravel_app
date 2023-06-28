<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTestingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                          ->from('replay@han.com')
                          ->view('email.mail_test',[
                            'name'  =>$this->name ]);
    }
}
