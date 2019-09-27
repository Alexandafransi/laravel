@extends('layouts.app')

@section('content')

<div>
        <h1>posts</h1>
        @if(count($posts)>0)

            @foreach ($posts as $post )

                <div class="well" style="color:black">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">

                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                  <div class="col-md-8 col-sm-8">
                        <h2><a href="/posts/{{$post->id}}" style="color:green">{{$post->title}}</a></h2>
                        <small>Written on {{$post->created_at}}  By {{$post->user->name}}</small>
                </div>  
                
                </div>  
            </div>  
            @endforeach
            {{$posts->links()}}
        @else
                <h2>post not found</h2>
        @endif

@endsection
</div>