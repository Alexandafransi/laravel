<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //
    public function index(){

        //passing an array that containg data 
        $data=['name'=>'alexander',"lastname"=>'malecha',"email"=>'alexismalecha@gmail.com',"head"=>"<h1>Heading</h1>"];

        //send array of items that contain data to the view page
        return view('page',['items'=>$data]);
    }
}
