<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //

    public function index(Request $request){

       // print_r($request->input());
        $request->validate([
            'email'=>'email',
            'username'=>'required',
            'password'=>'required|min:5|max:10'
        ]);

        print_r($request->input());
       
       //return view("login");
    }
}
