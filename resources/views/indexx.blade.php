@extends('welcome')

@section('main')


<div class="container-fluid">






<!-- 
<div>
    <h2>@lang('about.mes')</h2>
</div> -->

  <div class="container">
    <div align="right">
 <a href="{{url('/create')}}" class="btn btn-default">add</a>
</div>
    <div class="row">
        @foreach($data as $row)

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
              
  <div class="card-body">
    <img src="{{ URL::to('/') }}/images/{{ $row->mainImage }}" class="img-thumbnail" alt="...">
    <h5 class="card-title">Name of item :: {{ $row->name }}</h5>
     <h5 class="card-title">Price of item :: {{ $row->price }}</h5>
     <h5 class="card-title">price Offer of item :: {{ $row->priceOffer }}</h5>
     <h5 class="card-title">quantity of item :: {{ $row->quantity }}</h5>
      <h5 class="card-title">type of item :: {{ $row->type }}</h5>
       <div class="owl-carousel owl-theme pb-4">
   @foreach($row->images as $rw)
    <div class="item"><img src="{{ URL::to('/') }}/images/{{ $rw->url }}" class="img-thumbnail" alt="...">
     </div>
     @endforeach
   </div>
     @if($row->status =='1')
     <h5 class="card-title">stuts of item :: <a href="#" class="rounded-circle"><i style="color:#17f230; "  class="fas fa-circle"></i></a></h5>
      @else
      <h5 class="card-title">stuts of item :: <a href="#" class="rounded-circle"><i style="color:#f21717; "  class="fas fa-circle"></i></a> </h5>
      @endif

       @if($row->status =='1')


     <a class="btn btn-success  btn-sm" href="{{url('edit/'.$row->id)}}">edit</a><a class="btn btn-primary  btn-sm" href="{{url('destroy/'.$row->id)}}">delete</a><a class="btn btn-danger btn-sm  ml-1" href="{{url('activity/'.$row->id)}}">not activity</a>
     @else
      <a class="btn btn-success  btn-sm" href="{{url('edit/'.$row->id)}}">edit</a><a class="btn btn-primary  btn-sm" href="{{url('destroy/'.$row->id)}}">delete</a><a class="btn btn-success btn-sm" href="{{url('activity/'.$row->id)}}"> activity</a>

     @endif

 
  </div>
</div>
      </div>
     @endforeach     
      
    </div>
</div>

  </div>
    
  
    







@endsection
