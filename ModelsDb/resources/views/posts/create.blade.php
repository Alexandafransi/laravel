@extends('layouts.app')

@section('content')

<h1>Create Post</h1>
{{-- <div class="container" style="margin-top:2%;margin-left:20%;background-color:whitesmoke"> --}}

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' ,'style'=>'width:auto;' ,'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

    </div>

    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
            
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
{{-- </div> --}}
@endsection
