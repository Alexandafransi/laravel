@extends('layouts.app')
@section('content')

    <div style="margin-top:10%;">
    @if(count($services)>0)
    <ul class="list-group">
     <h1>{{$title}}</h1>
     <p>This is the services page</p>
     @foreach ($services as $service )

<li class="list-group-item">{{ $service }}</li> 
</ul>   
     @endforeach
    </div>
     @endif
@endsection