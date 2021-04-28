<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bluma css cdn -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  
  <!-- laravel css   -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- boostrap css cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style>
    body{
      color: aliceblue;
    }
    .nav li{
      color: aliceblue;
      padding: 10px;
      padding-right: none;
      padding-bottom: 20px;
    }
    .nav-item a{
      text-decoration: none;
      font-size: 1.3em;
      color: aliceblue;
      border-bottom: 2px solid black;
    }
    .navbar-brand a{
      text-decoration: none;
      color: aliceblue;
      border-bottom: 2px solid black;
    }
  </style>

</head>
<body>

<div class="row">
  <div class="col-md-2" style="padding-right:0 ;">
    <div class="nav"  style="background-color: rgb(48, 47, 47);display: flex;flex-direction: column;color: aliceblue;height: 100vh;width: 100%;">
      <li class="navbar-brand">
        <a href="{{ url('/admin') }}">
          Admin Control
        </a> 
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/users') }}">
         Users
      </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ url('/admin/post') }}">
          Posts
      </a>
      </li>
    </div>
    <a href="{{url('/')}}">
      <button class="btn btn-primary" style="position:absolute;margin:auto; bottom:2px; left:2px; right:2px;">Back To Site</button>
    </a>
  </div>
  <div class="col-md-10" style="padding: 30px;background-color: black;">
    @yield('content')
  </div>
</div>



  <script type="text/javascript">
$(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
