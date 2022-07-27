<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactView(Request $request) {
        return view('index');
    }

    public function contactEmail(Request $request) {    
        $emailData = $request->validate([
            'name' => 'required',
            'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email:strict',
            'message' => 'required'
        ]);
        // dd($emailData);
        Mail::to('johnrey@innocentrixphilippines.com')
            ->send(new ContactMail($emailData));

        // return $request->all();
        // return 'Message sent';
        Session::flash('message', 'Thank you for your email');
        return redirect()->route('sent.email');
        // return back()->with('success', 'Successfully has been submitted.');
    }

    // UNDERT_TEST
    // public function contactEmail(Request $request) {    
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
    //         'email' => 'required|email:strict',
    //         'message' => 'required'
    //     ]);
 
    //     if ($validator->fails()) {
    //        return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
    //     } else {
    //         $values = [
    //             'name' =>$request->name,
    //             'phone'=>$request->phone,
    //             'email'=>$request->email,
    //             'message'=>$request->message,
    //         ];

    //         $mail = Mail::to('johnrey@innocentrixphilippines.com')
    //                 ->send(new ContactMail($values));
    //         if($mail) {
    //             return response()->json(['status'=>1, 'msg'=>'Sent']);
    //         }
    //     }


    // }
}
