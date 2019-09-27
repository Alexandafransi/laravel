<html>
    <head>
    
    </head>


<body>

@if($errors->any())

<ul style="list-style-type: none; color:red"> 
 
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
    @endif


<form method="post" action="/login">

    @csrf
    <input type="text" name="username" placeholder="enter username">
    <input type="password" name="password" placeholder="enter password">
    <input type="submit" name="save" value="submit">
</form>
</body>
</html>