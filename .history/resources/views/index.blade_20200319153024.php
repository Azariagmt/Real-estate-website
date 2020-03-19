@extends('master')

@section('extra-styles')
<style>

.features-icon-item{
	margin-left:50px;
}

@media only screen and (max-width: 768px) {
	.features-icon-item{
	margin-left:30px;
	max-width:11.11%;
}
  }

</style>
@endsection

@section('content')
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section fixe-top">
@include('partials.nav')
		<!-- logo -->
<!-- 		
		
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{route('property')}}">Properties</a></li>
				<li><a href="{{route('selling')}}">Selling</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>				
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div> -->
	</header>
	<!-- Header section end -->
	
	<!-- Hero section -->
	<section class="hero-section">
		@include('partials.hero-social')
		<div class="hero-slider owl-carousel owl-theme">
			
			@foreach($propertiesForHeader as $property)
				<div class="hs-item set-bg" data-setbg="{{asset('storage/'. $property->image)}}">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-7">
								<h2>{{$property->description}} </h2>
									
							</div>
						</div>
					</div>
				</div>
			@endforeach
			
        </div>
        
		<!-- Hero details slider -->
		<div class="hero-nav-slider-warp">
			<div class="container">
				<div class="hero-nav-slider owl-carousel">
				@foreach($properties as $property)
					<div class="hns-item">
						<h5>{{$property->bedrooms}} Bedrooms</h5>
						<p>{{$property->details}}</p>
						<span>{{$property->presentPrice()}}</span>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="section-title">
				<h2>Feautured houses</h2>
			</div>
			<div class="row">

			@foreach($properties as $property)
			<div class="col-lg-6 col-md-6">
			<div class="container">
			<div class="row" style="margin-bottom:60px;">
                  <div class="col-md-6">
						<div class="row" data-setbg="{{ asset('img/property-gallery/1.jpg')}}" style="background-image: {{ asset('img/property-gallery/1.jpg') }};">
							<a href="{{route('property-selected', $property->slug) }}"> <img src="{{asset('storage/'. $property->image)}}" alt="{{$property->slug}}"></a>
								<a href="#" class="room-content">
								<i class="flaticon-heart"></i>
							</a>
						</div>
				</div>
				
					<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<a href="{{route('property-selected', $property->slug) }}">
									<h5>{{$property->description}}</h5></a>
							</div>
						
							<div class="row">
						  
								<div class="col-md-3">
									<p>Lot Size</p>
									<img src="img/rooms/size.png" alt="">
									<i class="flaticon-bath"></i>
									<span>{{$property->size }} sqft</span>
								</div>
								<div class="col-md-3">
									<p>Beds</p>
									<img src="img/rooms/bed.png" alt="">
									<span>{{$property->bedrooms}}</span>
								</div>
								<div class="col-md-3">
									<p>Baths</p>
									<img src="img/rooms/bath.png" alt="">
									<span>{{$property->bathrooms}}</span>
								</div>
								<div class="col-md-3">
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

			@endforeach
				
			</div>
		</div>
	</section>
	<!-- Intro section end-->
	@include('partials.index-partials.we-provide')
	<!-- Call to action section -->
	@include('partials.index-partials.call-to-action')
	<!-- Call to action section end-->
	
	@include('partials.footer')

	
	<!--====== Javascripts & Jquery ======-->

    @endsection