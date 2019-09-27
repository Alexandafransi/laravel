<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //
    public function index(Request $request){
    // $request=validate([

    //     'username'=>'required',
    //     'password'=>'required',

    // ]);

    // print_r($request->input());

    // $request->session()->flash("username",$request->input('username'));
    $request->session()->flash("username","data as been sent");

    return redirect("welcome");

    }
}
