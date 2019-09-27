@extends('layouts.app')

@section('content')

<div style="margin-top:;"><a href="/posts" class="btn btn-primary">Go Back</a></div>

<div style="margin-top:;">
<h1 style="color:brown">{{$post->title}}</h1>
<div>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
<br>
<br>
<div style="width:50%;height:auto">{!!$post->body!!}</div>

<hr>
<small style="color:black">{{$post->created_at}} </small>
<hr>

@if(!Auth::guest())

<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=> 'POST', 'style'=>'float:right'])!!}

    {{Form::hidden('_method','DELETE')}}

    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endif
<br>
<br>
<br>

@endsection
</div>