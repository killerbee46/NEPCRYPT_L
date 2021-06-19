@extends('frontend.template')

@section('body')

<div class="container" style="padding: 0;">
  @if (Route::has('login'))
  @auth
      @if(Auth::user()->role == 2)
      <div class="col-md-12" style="margin-bottom: 30px;position: absolute;top: 5vh; z-index: 5;">
          <a href="{{url('/post/add-post')}}"><button class="btn btn-success">Add Post</button></a>
      </div>
       @endif
  @endauth
@endif
    <div class="row" style="position: relative;width: 98vw;top: 20vh;">
        @foreach($post as $post)
        <div class="col-md-3" style="justify-content: center;margin-top: 40px;">
            
            <div class="service-item col-md-10">
                
                 <div class="card" style="width: 20rem;">
            <img class="card-img-top" style="height: 200px;" src="{{asset('/images/posts/'.$post->image)}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p>By: {{$post->user_name}} </p>
              <a href="{{url('post/show/'.$post->id)}}" class="btn btn-primary">READ MORE</a>
            </div>
          </div>
                
            </div>
            
        </div>
       
        @endforeach
    </div>
    
    

              </div>



@endsection