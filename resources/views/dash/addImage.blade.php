
@extends('welcome')

@section('main')
<!-- @if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif -->

<div align="right">
 <a href="{{url('/')}}" class="btn btn-default">Back</a>
</div>

<div class="container">
<form method="post" id="#demo-form" data-parsley-validate="" action="{{url('addImage')}}" enctype="multipart/form-data"  >

 @csrf
  
 

<br /><br /><br />
 <div class="form-group">
   <label class="col-md-4 text-left">Select  Image</label>
  <div class="col-md-8">
   <input type="file" name="image[]" required="" multiple/>
  </div><div class="p-2 col-md-7" id="imageErrors" style="color: red;"></div>
 </div>
 <br /><br />

 

 <br />
 <div class="form-group ">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form></div>

<script>


$(function () {
 
  $('#demo-form').parsley().on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>

@endsection
