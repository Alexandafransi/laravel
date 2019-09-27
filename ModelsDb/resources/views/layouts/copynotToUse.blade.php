<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta hhtp-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1"> 
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        {{-- include bellow is from the folder views->inc which containg navigation bar--}}
        @include('inc.navbar')
        <div class="container" style="margin-top:;background-color:gray;width:50%;height:auto;border-radius:2%">

        <div style="margin-top:10%;">@include('inc.messages')</div>
        @yield('content')
    </div>
    {{-- @include('ftr.footer') --}}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>