{{-- @extends('layout.index')

@section('content') --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="height:8%;background-color:slategrey!important;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="margin-left:30%">
              <a class="nav-link" href="/home">Home</span></a>
            </li>
            <li class="nav-item" style="margin-left:30%">
              <a class="nav-link" href="#">Posts</a>
            </li>
            <li class="nav-item" style="margin-left:30%">
              <a class="nav-link" href="#">AboutUs</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
{{-- @endsection --}}