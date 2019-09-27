<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
// use App\Mail\Mailtrap;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    //

    public function contact(){

        return view('mail.contact');
    }

    public function send(Request $request){
        
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required|email',
            // 'message' => 'required'
        ]);

        $data= array(
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        );

        \Mail::to('procoderfransi@gmail.com')->send(new Mailtrap($data));

        return back()->with('success','thanks for contact us!!');

    }
}
