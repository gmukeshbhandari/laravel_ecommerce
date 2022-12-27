@extends('master')
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-sm-12">
                <h4> Results For Product </h4>
                <div>
                    @foreach($products as $item)
                        <div style="float:left;padding:20px">
                            <a href="detail/{{ $item['id'] }}">
                        <img class="trending-img" src="{{ $item['gallery'] }}">
                        <div class="" >
                            <h2> {{ $item['name'] }}</h2>
                            <h5> {{ $item['description'] }}</h5>
                        </div>
                        </a>
                          </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
