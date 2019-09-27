<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

 


class SendEmailController extends Controller
{
    //
    public function index()
    {

        return view('mail');
    }

    public function send(Request $request){

        $this->validate($request,[

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


       $data = array(

        'name'  => $request->name,
        'message' => $request->message
   ); 
   \Mail::to('procoderfransi@gmail.com')->send(new SendMail($data));

   return back()->with('success','thanks for contacting us!!');
    }
}
