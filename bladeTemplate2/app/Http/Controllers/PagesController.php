<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){

        $title = 'welcome to laravel';
        return view('pages.index',compact('title'));

    }

    public function about(){

        $title='welcome to the about page';
        return view('pages.about')->with('title',$title);
    }

    public function services(){

        $data = array(
                'title'=>'service',
                'services'=> ['web Design','programming']
        );

        return view('pages.services')->with($data);
    }
}
