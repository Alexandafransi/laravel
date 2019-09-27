<html>

    <head></head>


    <body>
    
    <!-- @if ($errors->any())
    <div class="alert alert-danger">-->
        <ul style="list-style-type: none; color:red"> 
            @foreach ($errors->all() as $error)
                <li >{{$error}}</li>
            @endforeach
        </ul>
    </div>
<!-- @endif  -->
        <form action="/login" method="post">
        @csrf
            <input type="text" name="email"  placeholder="enter your email here"><br>
            <input type="text" name="username"  placeholder="enter your username here"><br>
            <input type="password" name="password" placeholder="enter your password here"><br>
            <button name="submit">login</button>
        </form>
    </body>

</html>