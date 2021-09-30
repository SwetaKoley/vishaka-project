<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset( 'backend/css/style.css' ) }}" rel="stylesheet">
    <link href="{{ asset( 'backend/css/bootstrap.min.css' ) }}" rel="stylesheet">
</head>
<body>

    <form method="POST" action="{{ route('admin.login_post') }}">
        @csrf
    <div class="container-1">
        <div class = "alert alert-success">
        hhjhj
        </div>
        @if(session()->has('success'))
        <div class = "alert alert-success">
        {{session()->get('success')}}
        </div>
        @endif

        @if(session()->has('fail'))
        <div class = "alert alert-danger">
        {{session()->get('fail')}}
        </div>
        @endif
        <h2>
            Login
        </h2>
        <p>
            We're so excited to see you again!
        </p>
        <br><input type="text" name="email" :value="old('email')" required autofocus  placeholder="Username or email" class="email-input inputs">
        <!--  -->
        <br><input type="password" name="password" required autocomplete="current-password" placeholder="Password" class="password-input inputs">
        <!--  -->
        @if (Route::has('password.request'))
        <span class="forget-span">
            <a href="{{route('forgot')}}" class="forget"> Forget Password?</a>
        </span>
        @endif
        <!--  -->
        <br><span class="login-span login"><button type="submit" class="btn btn-primary px-5">Login</button></span>

    </div>
</form>
</body>
</html>