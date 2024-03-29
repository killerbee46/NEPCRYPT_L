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


      <form method="POST" 
      action="{{url('admin/posts//updatepostinfo/$posts->id')}}" enctype="multipart/form-data">
          @csrf
          <div class="field">
            <label class="label">Title</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input" name ="title">
            </div>
          </div>

      <div class="field">
        <label class="label">Body</label>
        <div class="control has-icons-left has-icons-right">
          <textarea class='textarea' placeholder="Enter article here..." value="" name="body"></textarea>
        </div>
      </div>

  <div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image">
    <label class="custom-file-label custom-file" for="inputGroupFile04">Choose file</label>
  </div>
</div>
<br>
<div>
    <button class="btn btn-success">Submit</button>
  </div>
  </form>

</div>

@stop