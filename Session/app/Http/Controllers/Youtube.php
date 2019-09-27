<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //

    public function index(Request $request){
        $request->validate([

            'username'=>'required',
            'password'=>'required|min:5',

        ]);

        // print_r($request->input('username'));

        
        $data=$request->input();

        //we call variable session that we have put key name which is userData and variable data that contain data input for the form 
        $request->session()->put('userData',$data);

        // print_r($request->session()->get('userData'));

        //i assign variable output to my session that i have get
        $output=$request->session()->get('userData');

        if($output['username']=='alexanda' && $output['password']=='alexanda'){

          echo "hellow <br>".$output['username'];

        return view("welcome");

        }
        else{
            // echo "there is no session here";

            return view("login");
        }


    }
}
