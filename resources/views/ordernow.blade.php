@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2 class="text-decoration-underline mb-3">Order Confirmation</h2> 
            @if (count($data) > 0)           
    <table class="table table-striped">
      <thead>
        <tr>
          <th> Product Name </th>
          <th> Price </th>
          <th> Tax </th>
          <th>Total Price including Tax</th>
        </tr>
      </thead>
      <tbody>
        @php
            $grandtotal = 0;
            $totaltax = 0;
        @endphp
        @foreach ($data as $item)
        <tr>
            <td> {{ $item->name }} </td>
            <td> Rs {{ $item->price }} </td>
            <td> Rs 0 </td>
            <td> Rs {{ $item->price + 0}} </td>
            @php
                $grandtotal = $grandtotal + $item->price;
            @endphp
          </tr>
        @endforeach
          <td> Grand Total </td>
          <td> </td>
          <td> </td>
          <td> Rs {{ $grandtotal }} </td>  
      </tbody>
    </table>
    
    <div class="border px-3 py-3">
        <form action="{{ route('order_place') }}" method="post">
          @csrf
            <div class="mb-3 w-50">
                <input type="number" class="form-control" placeholder="Enter Your Mobile Number" id="mobile_number" name="mobile_number" required>
              </div>
            <div class="mb-3">
              <textarea placeholder="Enter Your Address Here" name="order_address" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
             <label class="mb-3"> Payment Method </label>
             <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" value="eSewa"type="radio" name="payment" id="payment1" disabled>
                            <label class="form-check-label" for="payment1">
                              eSewa
                            </label>
                          </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" value="Khalti" type="radio" name="payment" id="payment2" disabled>
                            <label class="form-check-label" for="payment2">
                              Khalti
                            </label>
                          </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" Value="Cash" type="radio" name="payment" id="payment3" checked>
                            <label class="form-check-label" for="payment3">
                              Payment on Delivery
                            </label>
                          </div>
                    </div>
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
    @else
    <h5> No Items in Cart </h5>
    @endif
        </div>
    </div>
  </div>
@endsection
