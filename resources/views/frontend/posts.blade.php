@extends('frontend.template')

@section('body')

<div style="padding: 40px;max-width: 100vw;overflow: inherit;">
    @if (Route::has('login'))
                @auth
                    @if(Auth::user()->role == 2)
                    <div class="col-md-12" style="margin-bottom: 30px;background-color: black;position: fixed;top: 20vh;">
                        <a href="{{url('/post/add-post')}}"><button class="btn btn-success">Add Post</button></a>
                    </div>
                     @endif
                @endauth
    @endif
    <div style="display: inline-block;">
        @foreach($post as $post)
        <div class="col-md-4" style="color: chartreuse;background-color: black;text-align: center;">
            
            <div class="service-item col-md-10">
                
                <img src="{{asset('/images/posts/'.$post->profile_pic)}}" height="175" width="350" alt="Icon" style="margin-left: auto;margin-left: auto;">
                <h4>{{$post->title}}</h4>
                <a href="{{url('post/show/'.$post->id)}}">READ MORE....</a>
                
            </div>
            
        </div>
        @endforeach
    </div>
    
    

              </div>



@endsection