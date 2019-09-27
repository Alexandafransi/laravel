<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id= auth()->user()->id;
        $user=User::find($user_id);
        return view('posts.create')->with('posts',$user->posts);
    }

    // public function about()
    // {
    //     return view('welcome');
    // }
}
