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

    public function contactEmail(Request $request) {    
        // $data = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:15',
        //     'email' => 'required|email:strict',
        //     'message' => 'required'
        // ]);
        // $response = array();

		// $response['message'] = "";

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['numeric','regex:/^([0-9\s\-\+\(\)]*)$/','min:15'],
            'email' => ['required','email:strict'],
            'message' => ['required']
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        );

        if($validator->fails()) {
            return response()->json(['error','Failed']);
        } else {
            Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
            ->send(new ContactMail($data));
            return response()->json(['success','Nice']);
        }

        





        // if ($emailData->fails()) {
        //     return response()->json(['errror' => $emailData->errors()->all()]);
        // } else {
            
        //     Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
        //         ->send(new ContactMail($data));
        //     return response()->json(['success' => 'Thanks for contacting us, we will get back to you soon.']);
        // }

        // $message = Session::flash('success', 'Thank you for your message.');
        // return redirect()->route('sent.email');
        // if ($emailData->fails()) {
        // return response()->json(['success'=>'Form is successfully submitted!']);
        // } 


        // $error = $validateData->errors();
    
        // $datas = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message
        // );

        // if ($data->fails()) {
        //     return response()->json(['code' => 400, 'msg' => $data->errors()->all()]);
        // } 

        

        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;
        // $msg = $request->message;

        // $mail = "
        //         Name: $name \n
        //         Email: $email \n
        //         Phone: $phone \n
        //         Message: $msg
        //     ";

        // Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
        // ->send(new ContactMail($mail));
        // return response()->json(['code' => 200, 'msg' => 'Thanks for contacting us, we will get back to you soon.']);
    
        // Session::flash('success', 'Thank you for your message.');
        // return redirect()->route('sent.email');

        
        

        // dd($emailData);
        // Mail::to('johnrey@innocentrixphilippines.com', 'JoRe')
        //     ->send(new ContactMail($validation));

        // return $request->all();
        // Session::flash('success', 'Thank you for your message.');
        // return redirect()->route('sent.email');
    }
}