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

        <div class="buttons" style="float: right;">
            <a href="{{url('admin/users/add-user')}}" class="button is-primary">Add User</a>
        </div>
         <h2 style="color:blue">Search result </h2>

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