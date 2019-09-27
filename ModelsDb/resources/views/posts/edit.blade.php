@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>
{{-- <div class="container" style="margin-top:2%;margin-left:20%;background-color:whitesmoke"> --}}

{!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST' ,'style'=>'width:auto;','enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

    </div>

    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
            
        </div>
        {{-- div bellow is for image to update --}}
        <div class="form-group">
                {{form::file('cover_image')}}
            </div>
        {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
{{-- </div> --}}
@endsection
