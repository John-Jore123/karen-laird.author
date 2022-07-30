<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contactView() {
        return view('index');
    }

    public function contactEmail(Request $request) {    
        $emailData = $request->validate([
            'name' => 'required',
            'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:15',
            'email' => 'required|email:strict',
            'message' => 'required'
        ]);
        // dd($emailData);
        Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
            ->send(new ContactMail($emailData));

        // return $request->all();
        // return 'Message sent';
        Session::flash('success', 'Thank you for your message.');
        return redirect()->route('sent.email');
    }
}