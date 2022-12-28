@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="text-center py-3 mb-3">
            <a href="{{ URL::previous() }}">Go Back</a>
        </div>
        <div class="col-sm-6">
            <img class="detail-img" src="{{  $product['gallery'] }}" >
        </div>
        <div class="col-sm-6">
            <h2> {{  $product['name'] }} </h2>
            <h5> {{  $product['description'] }} </h5>
            <h5> Rs {{  $product['price'] }} </h5>
           <br> <br>
           <form action="{{ route('add_to_cart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button class="btn btn-success"> Add to Cart </button>
            </form>
            
            <br> <br>
            <button class="btn btn-primary"> Buy Now</button>
       <br> <br>
        </div>
    </div>
</div>

@endsection
