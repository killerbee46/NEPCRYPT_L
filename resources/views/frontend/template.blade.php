<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NEPCRYPT</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    

    <style>
        .navbar{
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9;
            height: 10vh;
            padding-top: 25px;
            background-color: rgba(0, 0, 0, 0.904);
            background-color: black;
        }
        .card{
            border: none;
        }
        .card-body{
            background-image: linear-gradient(to right, green, black);
            color: white;
        }
        .navbar .navbar-brand{
            color: chartreuse;
        }
        .topnav{
            height: 9vh;
        }
        .topnav a{
            color: aliceblue;
        }
        .topnav a:hover {
            border-bottom: 3px solid black;
            margin-top: -3px;
        }
        body{
            position:absolute;
            top: 10vh;
            background-image:url("{{asset('/images/bg.png')}}");
            background-size: cover;
            background-repeat: fixed;
            max-height: 100vh;
        }
        .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
        .timer_box{
    margin: 35px 50px;
    display: inline-block;
    padding: 20px 12px 0px 12px;
    text-align: center;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, .6);
    background-color: rgba(228, 177, 115, 0.589);
}
.timer_box h1{
    font-size: 70px;
    margin-top: 5px;
    margin-bottom: 0px;
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    color: white;
}
.timer_box p{ margin-top: 0; font-size: 30px;}
    </style>
</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ url('/') }}"><div style="height: 15vh;width: 200px;"><img height="100%" width="100%" src="{{asset('/images/logo.png')}}" alt=""></div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/post') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/crypto') }}">En/De-Crypt</a>
                </li>

                @if (Route::has('login'))
                @auth
                    @if(Auth::user()->role == 3)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin') }}" class="text-sm text-gray-700 underline"
                            style='padding: .5em;margin-right: .5em;background-color: rgb(1, 129, 172); color: rgb(255, 255, 255);'>Admin
                            Control</a>
                    </li>

                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}" class="text-sm text-gray-700 underline"
                            style='padding: .5em;background-color: rgb(255, 55, 55); color: rgb(255, 255, 255);'>Logout</a>
                    </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline"
                        style='padding: .5em;margin-right: .5em;background-color: rgb(1, 129, 172); color: rgb(255, 255, 255);'>Log
                        in</a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"
                        style='padding: .5em;margin-right: .5em;background-color: rgb(47, 161, 255); color: rgb(255, 255, 255);'>Register</a>
                </li>
                @endif
                
                @endauth
                @endif
            </ul>
        </div>
    </nav>
</div>
    @yield('body')

</body>

</html>