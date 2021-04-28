@extends('frontend.template')

@section('body')

@if (Route::has('login'))
@auth

<div class="row" style="justify-content: center; width: 100%;">
    <div class="col-md-10">
        <div class="nav" style="height: 10vh;justify-content: space-evenly ;text-align: center;font-size: 1.5em;font-weight: 600;color: chartreuse;background-color: black;padding-top: 10px;">
                
            <div class="encrypt"> <a href="{{ url('/crypto/encrypt') }}"><button class="btn btn-success">ENCRYPT</button></a></div>
            <div class="title"><h2><------- RSA ENCRYPTION -------></h2></div>
            <div class="decrypt"><a href="{{ url('/crypto/decrypt') }}"><button class="btn btn-danger">DECRYPT</button></a></div>
        </div>
        <div class="crypto">

            @yield('crypto')

        </div>

    </div>
</div>

@else
    <h1 style="text-align: center;margin-top: 40vh;background-color: black;color: chartreuse;">YOU NEED TO LOGIN TO ENCRYPT/DECRYPT!!!</h1>

@endauth
@endif


@endsection