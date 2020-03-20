@extends('master')
@section('extra-styles')
<style>
.spad{
    margin-top:50px;
}
.navbar{
    background-color:#353649;
}
</style>
<link rel="stylesheet" href="{{'(css/algolia.css')}}"/>

@endsection
@section('content')

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
   
	<header class="header-section">
            @include('partials.nav')
	</header>

<section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                <h3>Filtered by {{$categoryName}}</h3>
            </div>
            <div class="row">
                <strong>Price: &nbsp;</strong>
                <a href="{{route('property',[ 'sort'=>'low_high'])}}">Low to High</a> &nbsp;|&nbsp;
                <a href="{{route('property',[ 'sort'=>'high_low'])}}">High to Low</a>
            </div>
            <br>
            <div class="row">
            @forelse($properties as $property)
            <div class="col-lg-4 col-md-6">
			<div class="container">
			<div class="row" style="margin-bottom:60px;">
                  <div class="col-sm-12 col-md-12 col-lg-12">
						<div class="row" data-setbg="{{ asset('img/property-gallery/1.jpg')}}" style="background-image: {{ asset('img/property-gallery/1.jpg') }};">
							<a href="{{route('property-selected', $property->slug) }}"> <img src="{{asset('storage/'. $property->image)}}" alt="{{$property->slug}}"></a>
								<a href="#" class="room-content">
								<i class="flaticon-heart"></i>
							</a>
						</div>
				</div>
				
					<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<a href="{{route('property-selected', $property->slug) }}">
									<h5>{!!$property->description!!}</h5></a>
							</div>
						
							<div class="row">
						  
								<div class="col-3 col-sm-3 col-md-3">
									<p>Lot Size</p>
									<img src="img/rooms/size.png" alt="">
									<i class="flaticon-bath"></i>
									<span>{{$property->size }} sqft</span>
								</div>
								<div class="col-3 col-sm-3 col-md-3">
									<p>Beds</p>
									<img src="img/rooms/bed.png" alt="">
									<span>{{$property->bedrooms}}</span>
								</div>
								<div class="col-3 col-sm-3 col-md-3">
									<p>Baths</p>
									<img src="img/rooms/bath.png" alt="">
									<span>{{$property->bathrooms}}</span>
								</div>
								<div class="col-3 col-sm-3 col-md-3">
									<p>Garage</p>
									<img src="img/rooms/garage.png" alt="">
									<span>{{$property->parking}}</span>
								</div>
								
							   
							
							</div>
							<hr>
							<br>
						
							<div class="row">
								<div class="col-md-6">
									<span>{{$property->presentprice()}}</span>
								</div>
								<div class="col-md-6">
									<a href="{{route('property-selected', $property->slug) }}" class="site-btn btn-line">View Property</a>
								</div>
							</div>
					</div><!--end of col-md-12-->
					</div>
				</div>
				 <hr>
			</div>
			</div>
			</div>
                @empty
                <div>
                No properties found.
                </div>
                @endforelse

                {{ $properties->appends(request()->input())->links() }}
            </div>
        </div>
    </section>

    @include('partials.footer')

    @endsection

	@section('extra-js')
	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
	   <script src="{{asset('js/algolia.js')}}"></script>

	@endsection