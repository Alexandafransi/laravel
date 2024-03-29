<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
//use DB; //for writting sql

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    public function index()
    {
        //
       //$posts=Post::all();//for select all
      // $posts=Post::orderBy('id','desc')->take(1)->get();//get details by desc order and take on for taking only one data
       //return $posts =Post::where('title','Post Two')->get();

       //$posts=DB::select('SELECT * FROM posts');
       $posts=Post::orderBy('created_at','desc')->paginate(1);//->paginate(1);//paginate for view page one two ....
       
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view("posts.index");
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image_cover' => 'image|nullable|max:1999'//this is for image validation
        ]);

        //for handler file upload
        if($request->hasFile('cover_image')){

             //get filename with the extension
             $filenameWithExt = $request ->file('cover_image')->getClientOriginalName();
             //Get just filename
             $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
             //GET JUST EXT
             $extension = $request->file('cover_image')->getClientOriginalExtension();

             //filename to store
             $fileNameToStore= $filename.'_'.time().'.'.$extension;//time for making image to be unique if someone upload the same image will not override with another image in the file
               
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);

        }else{
         
            $fileNameToStore='noimage.jpg';
        }

        $post=new Post;

        $post->title=$request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image=$fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success','post Created');
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
        // return Post::find($id);

        $post=Post::find($id);//find id that was taken to the index page 
        return view('posts.show')->with('post',$post);
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
        $post=Post::find($id);

        if(auth()->user()->id !== $post->user_id){

            return redirect('/postd')->with('error','Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        //for handler file upload
        if($request->hasFile('cover_image')){

            //get filename with the extension
            $filenameWithExt = $request ->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;//time for making image to be unique if someone upload the same image will not override with another image in the file
            
        //upload image
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);

        }
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        if($request->hasFile('cover_image')){

            $post->cover_image = $fileNameToStore;
        }
        // $post->user_ID = auth()->user()->id;


        $post->save();
        return redirect('/posts')->with('success','post updated');
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
        $post=Post::find($id);

        if(auth()->user()->id !== $post->user_id){

            return redirect('/postd')->with('error','Unauthorized Page');
        }
        if($post->cover_image !=$post->user_id){
            //then we use labrary use \ILLUMINATE\Support\Facades\Storage;
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');
    }

    // public function search($id){

    // }
}
