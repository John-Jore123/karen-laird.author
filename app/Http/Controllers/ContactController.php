<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactView() {
        return view('index');
    }

    // public function contactEmail(Request $request)
    // {
    //     $validation = Validator::make($request->all(), [
    //         'name' => ['required'],
    //         'phone' => ['numeric', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:15'],
    //         'email' => ['required', 'email:strict'],
    //         'message' => ['required']
    //     ]);

    //     if ($validation->fails()) {
    //         return response()->json(['code' => 400, 'msg' => $validation->errors()]);
    //     }

    //     // $name = $request->name;
    //     // $email = $request->email;
    //     // $msg = $request->message;
    //     // $msg = "
    //     //     Name: $name \n
    //     //     Email: $email \n
    //     //     Message: $msg
    //     // ";

    //     // $receiver = "dialawisdom@gmail.com";
    //     // Mail::to($receiver)->send(new ContactMail($msg));
    //     // return response()->json(['code' => 200, 'msg' => 'Thanks for contacting us, we will get back to you soon.']);
    // }

    public function contactEmail(Request $request) {    
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:15',
        //     'email' => 'required|email:strict',
        //     'message' => 'required'
        // ]);

        $validation = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['numeric', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:15'],
            'email' => ['required', 'email:strict'],
            'message' => ['required']
        ]);

        // $error = $data()->errors();

        // if(!(count($error->all()) > 0 )) {
            // $validation = array(
                $name = $request->name;
                $email = $request->email;
                $phone = $request->phone;
                $msg = $request->message;
                $data = "
                    Name: $name \n
                    Email: $email \n
                    Phone: $phone \n
                    Message: $msg
                ";
            // );

            Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
            ->send(new ContactMail($data));

            Session::flash('success', 'Thank you for your message.');
            return redirect()->route('sent.email');
        // }

        // $data = array(
        //     $name = $request->name,
        //     $email = $request->email,
        //     $phone = $request->phone,
        //     $msg = $request->message
        // );
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;
        // $msg = $request->message;
        // $msg = "
        //     Name: $name \n
        //     Email: $email \n
        //     Phone: $phone \n
        //     Message: $msg
        // ";
        // dd($emailData);
        // Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
        //     ->send(new ContactMail($validation));

        // if($validation->fails()) {
        //     return response()->json(['code' => 400, 'msg' => $validation->errors()]);
        // }

        // return $request->all();
        // Session::flash('success', 'Thank you for your message.');
        // return redirect()->route('sent.email');
    }
}