<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
<h3>welcome {{$user['name']}}</h3>
<br>
Your registered email is {{$user['email']}} , Please click on the below link to verify your email account
<br/>

<a href="{{url('user/verify', $user->verifyUser->token)}}">verify Email</a>
</body>
</html>