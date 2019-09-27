<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id= auth()->user()->id;
        $user= User::find($user_id);
    //    var_dump(count($user));
        // print_r($chartDatas);exit;
        // var_dump($users=User::withCount(['posts',$user->post])->get());
        return view('dashboard')->with('posts', $user->posts);
    }
}
