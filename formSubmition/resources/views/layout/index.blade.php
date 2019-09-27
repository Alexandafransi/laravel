<html>
    <head>
        <title>forum</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>

    <body>
        <div>@include('incl.navbar')</div>
        <div class="container">

                @yield('content')
        </div>
       @include('incl.footer')
    </body>
</html>