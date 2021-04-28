@extends('admin.adminmaster')
@section('content')
<div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('errors') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form style="float: right;" method="POST" 
          action="{{url('admin/post/search-post/')}}" >
              @csrf
                  <input class="input is-normal" type="text" placeholder="Search Posts" style="width: 300px; " name="searched">
                  <button class="btn btn-primary" >Search</button>

        </form>
        <div class="buttons" style="float: right;">

            <a href="{{url('admin/post/add-post')}}" style="margin-right: 3px;" class="button is-primary">Add Post</a>

        </div>
         <h2 style="color:chartreuse">Posts</h2>


         <table border="1px" class="table">
             <tr>
                 <th>Title</th>
                 <th>Image</th>
                 <th>Action</th>

             </tr>

             @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->profile_pic}}</td>
                    <td>
                        
                        <form method="post" action="{{url('admin/post/delete-post/'.$post->id)}}"  >
                            <a href="{{url('admin/post/edit-post/'.$post->id)}}" class="btn btn-primary">Edit </a>
                            @csrf
                            <button class="btn btn-danger" >Delete </button>
                        </form>

                    </td>
                   
                </tr>
             @endforeach


         </table>
        <!--  <p>Red background </p> -->
</div>
 @stop