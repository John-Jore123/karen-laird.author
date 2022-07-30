<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
        $this->data = $emailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('johnrey@innocentrixphilippines.com')
                    ->bcc('johnrey@innocentrixphilippines.com')
                    ->subject('New email from your website.')
                    ->with('mailContent',$this->data)
                    ->view('mail.email');
    }
}