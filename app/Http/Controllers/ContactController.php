<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactView() {
        return view('index');
    }

    public function contactEmail(Request $request) {           
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['numeric','regex:/^([0-9\s\-\+\(\)]*)$/','min:15'], //to pass data w/o any field input or uncomment it to pass data
            'email' => ['required','email:strict'],
            'message' => ['required']
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        );

        if($validator->fails()) {
            return response()->json(
                [   'code' => 400,
                    'message' => 'Failed to send feedback. Something went wrong in sending feedback.', 
                    'status' => $validator->errors()->all()  ]
            );
        } else {
            Mail::to('johnrey@innocentrixphilippines.com', 'Author')
                ->send(new ContactMail($data));

            return response()->json(
                [   'code' => 200,
                    'message' => 'Thank you for sending your feedback.',    ]
            );
        }


        
        // $this->validate($request, [
        //     'name' => ['required'],
        //     'phone' => ['numeric','regex:/^([0-9\s\-\+\(\)]*)$/','min:15'], //to pass data w/o any field input or uncomment it to pass data
        //     'email' => ['required','email:strict'],
        //     'message' => ['required']
        // ]);

         
            // Mail::send('mail.email', 
            //     $data = array(
            //         'name' => $request->get('name'),
            //         'email' => $request->get('email'),
            //         'phone' => $request->get('phone'),
            //         'message' => $request->get('message'),
            //     ),
            //     function($message) use ($data) {
            //         $message->from($data['email'], $data['name']);
            //         $message->to('johnrey@innocentrixphilippines.com', 'Author')->subject('Feedback customer from your website.');
            //         $message->BCC('pagetunerforms@gmail.com');
            //     });
            // return redirect()->route('send.mail');
        
        // $validator = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:15',
        //     'email' => 'required|email:strict',
        //     'message' => 'required'
        // ]);
        // ### OR ###
        // $validator = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:15',
        //     'email' => 'required|email:strict',
        //     'message' => 'required'
        // ])->validate();

        // dd($emailData);
        // Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
        //     ->send(new ContactMail($validator));
        // Session::flash('success', 'Thank you for your feedback.');
        // return redirect()->route('send.mail');
    }
}