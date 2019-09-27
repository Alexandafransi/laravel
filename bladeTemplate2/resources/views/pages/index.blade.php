@extends('layouts.app')
@section('content')
<div class="jumbotron text-center" style="margin-top:5%;width:50%;margin-left:20%;">
     <h1>{{$title}}</h1>
     <p>This is the laravel application</p>
     <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a></p>
     <p><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

    </div>

@endsection