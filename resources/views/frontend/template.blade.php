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
    
    <script>
        function encrypt(){
            var ptext = document.getElementById('plain').value;
            document.getElementById('encoded').value = ptext;
        }
        function decrypt(){
            var etext = document.getElementById('ciphertext').value;
            document.getElementById('decoded').value = etext;
        }
    </script>
    <style>
        .navbar{
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9;
        }
        .topnav{
            height: 9vh;
        }
        .topnav a{
            margin-top: 10px;
            color: black;
        }
        .topnav a:hover {
            border-bottom: 3px solid black;
            margin-top: -3px;
        }
        body{
            position:absolute;
            top: 10vh;
            /* background-image:url("{{asset('/images/bg.png')}}"); */
            background-color: black;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white;">
        <a class="navbar-brand" href="{{ url('/') }}" style=" color: black">NEPCrypt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" style=" color: black">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/post') }}" style=" color: black">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/crypto') }}" style=" color: black">En/De-Crypt</a>
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

    @yield('body')

</body>

</html>