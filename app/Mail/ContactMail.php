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
        $data = $this->data;
        return $this->from($data['email'])
                    ->bcc('johnrey@innocentrixphilippines.com')
                    ->subject('Feedback from your website.')
                    ->with('mailData', $data)
                    ->view('mail.email');
        // return $this->markdown('mail.email', compact('data'));
    }
}