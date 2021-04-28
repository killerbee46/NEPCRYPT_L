@extends('admin.adminmaster')
@section('content')
<div class="container">

      <form method="POST" 
      action="{{url('admin/post/add-post/')}}" enctype="multipart/form-data">
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
    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="profile_pic">
    <label class="custom-file-label custom-file" for="inputGroupFile04">Choose file</label>
  </div>
</div>
<br>
<div>
    <button class="button is-success">Submit</button>
  </div>
  </form>

</div>

@stop