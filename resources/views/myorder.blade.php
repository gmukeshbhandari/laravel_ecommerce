@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(count($orders) > 0)
        <div class="col-sm-8 bg-success">
                <h2 class="fw-bold text-center text-decoration-underline mb-4"> Order List</h2>
                         @php
                            $grandtotal = 0;
                        @endphp
                    @foreach($orders as $item)
                    <div class="row justify-content-center py-3 border-bottom">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <h5> {{ $item->name }} </h5>
                            <h6> Delivery Status : {{ $item->delivery_status }} </h6>
                            <h6> Payment Status : {{ $item->payment_status }} </h6>
                            <h6> Payment Method : {{ $item->payment_method }} </h6>
                            <h6> Mobile Number : {{ $item->mobile_number }} </h6>
                            <h6> Address : {{ $item->address }} </h6>
                            <h6> Price : {{ $item->price }} </h6>
                        @php
                            $grandtotal = $grandtotal + $item->price;
                        @endphp
                        </div>
                    </div>
                   
                    @endforeach
                  
                
        </div>
        <div class="col-sm-4 bg-info py-2">
            <h2 class="fw-bold text-center text-decoration-underline mb-4"> Grand Total </h2>
            <h5> Total Item Price (Rs {{ $grandtotal }}) + Rs 100 (Delivery Charge) = Rs {{ $grandtotal + 100 }} </h5>
           </div>
        {{-- 
            <div class="col-sm-4 text-start bg-info">
            <h2 class="fw-bold mb-4 text-decoration-underline"> Delivery Detail </h2>
            <h6> Delivery Status : {{ $item->delivery_status }} </h6>
            <h6> Payment Status : {{ $item->payment_status }} </h6>
            <h6> Payment Method : {{ $item->payment_method }} </h6>
            <h6> Mobile Number : {{ $item->mobile_number }} </h6>
            <h6> Address : {{ $item->address }} </h6>
        </div>
        --}}
        @endif
        @if(count($orders) == 0)
        <h2 class="text-center fw-bold text-decoration-underline mb-4"> Order List</h2>
            <div class="text-center">
                <h5> You haven't order any item. </h5>
                </div>
        @endif
    </div>
</div>
@endsection
