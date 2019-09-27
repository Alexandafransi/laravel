<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>emails</title>
</head>
<body>
    
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 offset-4">

            <h3>welcome to this site {{$user['name']}}</h3>

            <p>your registered email is {{$user['email']}}, Please click on the bellow link to verify your email account</p>
            <br>
            <a href="{{url('user/verify',$user->verifyUser->token)}}">Verify Email</a>
        </div>
        </div>
    </div>
</body>
</html>