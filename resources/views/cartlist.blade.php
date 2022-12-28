@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <h2 class="text-center fw-bold text-decoration-underline mb-4"> Cart List</h2>
              
                    @if (count($products) > 0)
                    <div class="text-center mb-3">
                    <a href="{{ route('order_now') }}" class="btn btn-success mb-3">Order Now</a>
                    </div>
                    @else
                        <div class="text-center">
                            <h5> No Items in Cart </h5>
                        </div>
                    @endif
                    @foreach($products as $item)
                    <div class="row justify-content-center py-3 border-bottom">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                           <h3> {{ $item->name }} </h3>
                           <h6> {{ $item->description }} </h6>
                        </div>
                        <div class="col-sm-3">
                            <form action="{{ route('remove_cart') }}" method="post">
                                @csrf
                            <input type="hidden" name="item_id" value="{{  $item->id }}">
                            <button class="btn btn-warning"> Remove From Cart </button>
                            </form>
                         </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
@endsection
