<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $emailData = $this->data;
        return $this->from($emailData['email'])
                    ->bcc('johnrey@innocentrixphilippines.com')
                    ->subject('Feedback customer from your website.')
                    ->with('emailData', $emailData)
                    ->view('mail.email');
        // return $this->markdown('mail.email', compact('mail'));
    }
}