@extends('layouts.app')

@section('content')

@if(!Auth::guest())
<div class="container">
<div class="row">

    <div class="col-md-12" style="margin-top:7%">

        {{-- @include('inc.message') --}}

        
            <h1>Create Post</h1>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' ,'style'=>'width:auto;' ,'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title' ,'required'])}}
        
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
        
        

    </div>
</div>

</div>
@else
<div>
   <h1 style="color:red;">Please Register First</h1>
</div>
@endif
@endsection
