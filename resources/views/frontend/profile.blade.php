@extends('template')

@section('body')

<div class="card">
    <center>
        <img src="{{Auth::user()->profile_pic}}" alt="" class="avatar">
    </center>
</div>

@endsection