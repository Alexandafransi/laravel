<html>

    <head>
        <title>
            App title - @yield('title')
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body style="background-color:whitesmoke">
        <div style="background-color:brown">
            @section('sidebar')

            @show
        </div>

        <div class="main">
        
            @yield('main')
        </div>

            <div class="footer">

            @section('footer')
            @show
            </div>

    </body>
</html>