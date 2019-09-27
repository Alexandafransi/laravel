@extends('layouts.app')

@section('content')

    <div class="container box">

        @if(count($errors)>0)

            <div class="alert alert-danger">

             <ul>
                 @foreach ($errors->all() as $error)


                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                    </div>

                    @endif

             {{-- <li>{{ $error }}</li>     --}}
             {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}

                 @endforeach
             </ul>
            </div>

            @endif
    </div>


    {!!Form::open(['action'=>'ContactController@send', 'method' => 'POST'])!!}

    @csrf
    <div class="form-group">

        {{Form::label('name','Your Name')}}
        {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'please enter your name here'])}}
    </div>

    <div class="form-group">

        {{Form::label('email','Your Email')}}
        {{Form::email('email','',['class'=>'form-control', 'placeholder'=>'Please Enter Your Email Here'])}}

        {{-- <input id="title" type="email" class="@error('email') is-invalid @enderror"> --}}


    </div>

    <div class="form-group">

        {{Form::label('content','Your Message')}}
        {{Form::textarea('content','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Please Enter Your Message Here'])}}
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!!Form::close()!!}
    
@endsection