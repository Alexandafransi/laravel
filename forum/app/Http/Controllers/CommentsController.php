<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct() {
    //     $this->middleware('auth');
    // }
 
    public function index( )
    {
       
         $comments=Comment::orderBy('created_at','desc')->get();

        return view('welcome', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Comment $comment)
    {

        $this->validate($request,[
            'content'=>'required',
        ]); 
        
        $post = Post::find($request->post_id);

        // dd(get_class_methods($post->comments())); 

        // $post->comments()->create([ //getting data from the post
        //     'content' =>  $request->content,
        //     'user_id' => $request->user()->id
        // ]);
       
        //this to remember u can get data any where but u must consider relationship 

        $comment->content = $request->content;
        $comment->user_id = $request->user()->id;
        $comment->post_id = $request->post_id;  

        $comment->save();

        // dd($comment);
        // $post->save();

        return redirect('/welcome')->with('success','you have commented');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
        
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}