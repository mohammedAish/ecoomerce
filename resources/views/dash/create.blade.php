
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
<form method="post" id="#demo-form" data-parsley-validate="" action="{{url('store')}}" enctype="multipart/form-data"  >

 @csrf
  <div class="form-group">
   <label class="col-md-4 text-left">Title of item</label>
  <div class="col-md-8">
   <input type="text" name="title" class="form-control input-lg" required=""/>
  </div>
  <div class="p-2 col-md-7" id="first_nameErrors" style="color: red;"></div>
 </div><br /><br /><br />
 <br /><br /><br />
 <div class="form-group">
   <label class="col-md-4 text-left">Select  Main Image</label>
  <div class="col-md-8">
   <input type="file" name="mainImage" required="" multiple/>
  </div><div class="p-2 col-md-7" id="imageErrors" style="color: red;"></div>
 </div>
 <br /><br />
 <div class="form-group">
   <label class="col-md-4 text-left">price of item</label>
  <div class="col-md-8">
   <input type="text" name="price" class="form-control input-lg" required=""/>
  </div>
  <div class="p-2 col-md-7" id="first_nameErrors" style="color: red;"></div>
 </div>
<br /><br /><br />
<div class="form-group">
   <label class="col-md-4 text-left">price Offer of item</label>
  <div class="col-md-8">
   <input type="text" name="priceOffer" class="form-control input-lg" required=""/>
  </div>
  <div class="p-2 col-md-7" id="first_nameErrors" style="color: red;"></div>
 </div>
 
<br /><br />
 <div class="form-group">
   <label class="col-md-4 text-left">quantity of item</label>
  <div class="col-md-8">
   <input type="text" name="quantity" class="form-control input-lg" required=""/>
  </div>
  <div class="p-2 col-md-7" id="first_nameErrors" style="color: red;"></div>
 </div>
<br /><br /><br />
 <div class="form-group">
   <label class="col-md-4 text-left">Select  Other Images</label>
  <div class="col-md-8">
   <input type="file" name="image[]" required="" multiple/>
  </div><div class="p-2 col-md-7" id="imageErrors" style="color: red;"></div>
 </div>
 <br /><br />

 <div class="form-group">
    <label for="exampleFormControlSelect1">Select Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option>clothing</option>
      <option>accessories</option>
      <option>shoes</option>
      <option>handbags</option>
    </select>
  </div>

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
