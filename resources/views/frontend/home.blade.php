@extends('frontend.template')

@section('body')

<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://3.bp.blogspot.com/-_7vaKiNZPXk/XCWoF-0xj7I/AAAAAAAAAMk/Bx7Ne5WLEvINHPDoG1jwY6rGO2d62pprwCKgBGAs/s1600/ux-design.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">First Slide</h2>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://4.bp.blogspot.com/-InDD3Hm_bhU/XB4_TK3TT7I/AAAAAAAAAJ4/r5tUeCOqq1MTchFh7D7pWdf582A4qYIIwCEwYBhgL/s1600/Businesswoman-working-at-a-computer-1280x720.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Second Slide</h2>
              <p class="lead">This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://1.bp.blogspot.com/-GWl5F8P4t-8/XB4_VV4VE5I/AAAAAAAAAKE/SmHRzas-LpMpDBoLn6otR9AznVsr6L7OgCEwYBhgL/s1600/t1larg.africa.cnn.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Third Slide</h2>
              <p class="lead">This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
</div>



@endsection
