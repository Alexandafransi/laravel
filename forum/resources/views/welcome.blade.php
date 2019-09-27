@extends('layouts.app')

@section('content')


<main role="main">
      
        <div class="album py-5">  
          {{-- bg-dark --}}
          <div class="container">
      
            
            <div class="row" >
                    @if(count($posts)>0)

                    @foreach ($posts as $post)
              <div class="col-md-10" style="margin-left:6.5%">
                <div class="card mb-4 shadow-sm">
                <img style="width:100%;height:auto" src="/storage/cover_images/{{$post->cover_image}}">

                    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                  <div class="card-body">
                 <h1> <p class="card-text">Title of Post</p></h1>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                     <h2> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                      </div>
                    <small class="text-muted">Posted By {{$post->user->name}}</small>
                    
                    </div>

                  </div>
                  <hr>

                 {{-- {{$post->id}} --}}
                 {{-- @foreach($comments as $comment)
                 {{$comment->content}}
               @endforeach
          --}}

          
          <h2 style="margin-left:5%"><b>Your comment bellow</b></h2>
          @foreach($post->comments as $comment)
          <div class="display-comment" style="margin-left:5%">
                  
              {{-- <strong>{{ $comment->user->name }}</strong> --}}
              
              <p>{{ $comment->content }} ---->Commented By {{ $comment->user->name }}</p>
              

          </div>
          
                {{-- {{count($comment)}} --}}
         
      @endforeach
      
            @if(!Auth::guest())
                  {!!Form::open(['action' => 'CommentsController@store',$post->id, 'method' => 'POST' ])!!}

                <div class="form-group">
                   
                        {{-- {{Form::label('content','Comment')}} --}}
                        {{Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'your comment please...'])}}
                        {{ Form::hidden('post_id', $post->id) }}

                    </div>

                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

                  
                {!!Form::close()!!}
                @endif
                </div>
              </div>
             

              @endforeach

              @else
              <h3>Post not found</h3>
        
              @endif

              
            </div>
          </div>
        </div>
        {{-- {{$comments}} --}}

              
      </main>
     
@endsection