  
@extends('welcome')

@section('main')
    <div class="container">
        <div class="row">
            @if($cart)
            <div class="col-md-8">
                    @foreach( $cart->items as $product)
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $product['name'] }}
                                    </h5>
                                    <div class="card-text" style="margin-bottom: 50px">
                                        ${{ $product['price'] }} 
                                       
                                        <form action="{{ url('update/'.$product['id'])}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="qty" id="qty" value="{{ $product['qty']}}">
                            <button type="submit" class="btn btn-secondary btn-sm">Change</button>

                        </form>

                         <form action="{{ url('remove/'.$product['id'])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm ml-4 float-right" style="margin-top: px;">Remove</button>


                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <p><strong  style="border: 2px solid red;padding: 5px;">Total : ${{$cart->totalPrice}}</strong></p>

            </div>

            <div class="col-md-4">
            <div class="card bg-black text-white">
                <div class="card-body">
                    <h3 class="card-titel">
                        Your Cart
                        <hr>    
                    </h3>
                    <div class="card-text">
                        <p>
                        Total Amount is <span  style="border: 2px solid #403; padding: 5px; margin: 10px;">${{$cart->totalPrice}}</span> 
                        </p>
                        <p>
                        Total Quantities is   <span  style="border: 2px solid #403; padding: 5px; margin: 10px;"> {{$cart->totalQty}}</span>
                        </p>
                        <a href="{{url('checkout/'.$cart->totalPrice)}}" class="btn btn-info">Chekout</a>
                    </div>
                </div>
            </div>
            </div>
            @else
            <p>There are no items in the cart</p>

            @endif
        </div>
    </div>

@endsection
