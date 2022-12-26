@extends('master')
@section('content')

<div class="container-fluid mt-3" style="background-color:gray">
	<div class="row justify-content-center">
		  <div class="col-sm-6">
		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
				@foreach($products as $item)
					<div class="carousel-item {{ $item['id'] ==1?'active':'' }}">
					<a href="detail/{{ $item['id'] }}">
						<img class="d-block w-100 slider-img" src="{{ $item['gallery'] }}">
					<div class="carousel-caption d-none d-md-block img-caption-custom" >
						<h3> {{ $item['name'] }}</h3>
						<p>{{  $item['description'] }}</p>
				  	</div>
				</a>
			  		</div>
				@endforeach
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
		</div>
	</div>
	</div>

	
</div>

<div class="trending-block clearfix">
	<h1> Trending Products </h1>
	<div>
		@foreach($products as $item)
			<div class="trending-items">
				<a href="detail/{{ $item['id'] }}">
			<img class="trending-img" src="{{ $item['gallery'] }}">
			<div class="" >
				<h3> {{ $item['name'] }}</h3>
			  </div>
			</a>
			  </div>
		@endforeach
	</div>
</div>

@endsection
