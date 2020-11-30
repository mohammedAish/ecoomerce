
@extends('welcome')

@section('main')

  <!-- Modal -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    
                    <div class="row">
               

                        <div class="col-md-5 col-sm-6">
                            <div class="card">
                                                            @foreach($data->images as $rw)
    <img src="{{ URL::to('/') }}/images/{{ $rw->url }}" class="img-thumbnail" alt="..." style="width: 250px; height: 250px">
     @endforeach
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="product-single">
                                <div class="ps-header">

                                    <span class="badge offer">-50%</span>
                                    <h3>{{ $data->name }}</h3>
                                    <div class="ratings-wrap">
                                        <div class="ratings">
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                        </div>
                                        <em>(6 reviews)</em>
                                    </div>
                                    <div class="ps-price"><span>$ {{ $data->price }}</span> $
                                     {{ $data->priceOffer }}</div>
                                </div>

                                <div class="ps-stock">@if($data->status =='1')
     <h5 class="card-title">Available:: It's available <a href="#" class="rounded-circle"><i style="color:#17f230; "  class="fas fa-circle"></i></a></h5>
      @else
      <h5 class="card-title">Available :: It's not available <a href="#" class="rounded-circle"><i style="color:#f21717; "  class="fas fa-circle"></i></a> </h5>
      @endif
                                   
                                </div>
                                <div class="sep"></div>
                               
                                <div class="space10"></div>
                                <div class="row select-wraps">
                                   
                                    <div class="col-md-5 col-sm-5">
                                        <p>Quantity<span>*</span></p>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="space20"></div>
                                <div class="share">
                                    <span>
                                        <a href="#" class="fa fa-heart-o" onclick="return false;"></a>
                                        <a href="#" class="fa fa-signal" onclick="return false;"></a>
                                        <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>
                                    </span>
                                    <div class="addthis_native_toolbox"></div>
                                </div>
                                <div class="space20"></div>
                                <div class="sep"></div>
                                <a class="btn-color" href="{{url('addToCart/'.$data->id)}}">Add to Bag</a>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection