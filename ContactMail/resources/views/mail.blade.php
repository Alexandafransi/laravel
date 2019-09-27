<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container box">

        @if(count($errors)>0)

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
            
                <ul>
                    @foreach ($errors->all() as $error )

                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
        </div>

        @endif
    <form  method="post" action="{{ url('sendmail/send')}}">
    
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name"> Enter Your Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email"> Enter Your Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message"> Enter Your Message</label>
            <textarea name="message" id="" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <input type="submit" name="send" value="Send" class="btn btn-info">
        </div>
    </form>
    </div>
</body>
</html>