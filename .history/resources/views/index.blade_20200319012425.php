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
				<div class="hs-item set-bg" data-setbg="img/slider/1.jpg">
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

	<!-- features icons section -->
	<!-- <div class="features-icons-section">
		<div class="row mx-auto space">
				<div class="features-icon-item spacer">
					<i class="flaticon-151-banker"></i>
					<p>Easy Buying</p>
				</div>
				<div class="features-icon-item">
					<i class="flaticon-151-closing"></i>
					<p>Ready to Move</p>
				</div>
				<div class="features-icon-item">
					<i class="flaticon-151-maps-and-flags-3"></i>
					<p>Great Locations</p>
				</div>
				<div class="features-icon-item">
					<i class="flaticon-151-indoor"></i>
					<p>Modern Designs</p>
				</div>
				<div class="features-icon-item">
					<i class="flaticon-151-maps-and-flags-1"></i>
					<p>Parking Spaces</p>
				</div>
		</div>
	</div> -->
	<!-- features icons section end-->

	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="section-title">
				<h2>Feautured houses</h2>
			</div>
			<div class="row">

			@foreach($properties as $property)
			<div class="col-lg-4 col-md-6">
                  <div class="col-md-6">
					<div class="row" data-setbg="{{ asset('img/property-gallery/1.jpg')}}" style="background-image: {{ asset('img/property-gallery/1.jpg') }};">
				   <a href="{{route('property-selected', $property->slug) }}"> <img src="{{ asset('img/property-gallery/'.$property->slug.'.jpg') }}"></a>
						<a href="#" class="room-content">
							<i class="flaticon-heart"></i>
						</a>
					</div>
					</div>
					<hr>
					<div class="col-md-6"></div>
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
									<p>For Sale</p>
									<span>{{$property->presentprice()}}</span>
								</div>
								<div class="col-md-6">
									<a href="{{route('property-selected', $property->slug) }}" class="site-btn btn-line">View Property</a>
								</div>
							</div>
					</div><!--end of col-md-12-->
				
				</div>
				 <hr>
			</div>
			@endforeach
				
			</div>
		</div>
	</section>
	<!-- Intro section end-->
	
	<!-- Design section end-->
	<!-- <section class="design-section">
		<div class="container">
			<div class="section-title st-light">
				<h2>our houses</h2>
			</div>
		</div>
		<div class="design-slider owl-carousel">
			<a href="img/design/1.jpg" class="img-popup-gallery">
				<img src="img/design/1.jpg" alt="">
				<i class="flaticon-151-reading-glasses"></i>
			</a>
			<a href="img/design/2.jpg" class="img-popup-gallery">
				<img src="img/design/2.jpg" alt="">
				<i class="flaticon-151-reading-glasses"></i>
			</a>
			<a href="img/design/3.jpg" class="img-popup-gallery">
				<img src="img/design/3.jpg" alt="">
				<i class="flaticon-151-reading-glasses"></i>
			</a>
			<a href="img/design/2.jpg" class="img-popup-gallery">
				<img src="img/design/2.jpg" alt="">
				<i class="flaticon-151-reading-glasses"></i>
			</a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="design-text text-white">
						<h4>INTERIOR </h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="design-text text-white">
						<h4>ENVIORMENT FRIENDLY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Design section end-->
	
	<!-- Location section-->
	<section class="location-section spad">
		<div class="container">
			<div class="section-title">
				<h2>location</h2>
			</div>
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="tab-content location-tab">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
							<img src="img/location/1.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=Sz_1tkcU0Co" class="play-btn"><img src="img/play-icon.png" alt=""></a>
						</div>
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
							<img src="img/location/2.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=7JTHzDiJ2NA" class="play-btn"><img src="img/play-icon.png" alt=""></a>
						</div>
						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
							<img src="img/location/3.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=g3tB7aFoyjY" class="play-btn"><img src="img/play-icon.png" alt=""></a>
						</div>
						<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
							<img src="img/location/4.jpg" alt="">
							<a href="youtube.com/watch?v=slJrBtarjgo" class="play-btn"><img src="img/play-icon.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<ul class="nav nav-tabs location-tab-nav" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
								<img src="img/location/thumb-1.jpg" alt="">
								<h5>Surroundings</h5>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
								<img src="img/location/thumb-2.jpg" alt="">
								<h5>Interior Design</h5>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
								<img src="img/location/thumb-3.jpg" alt="">
								<h5>Comunity Pool</h5>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
								<img src="img/location/thumb-4.jpg" alt="">
								<h5>Views</h5>
							</a>
						</li>
					</ul>
				</div>	
			</div>
		</div>
	</section>
	<!-- Location section end-->

	<!-- Features section -->
	<section class="features-section">
		<div class="container">
			<div class="section-title">
				<h2>features</h2>
			</div>
		</div>
		<div class="features-slider owl-carousel">
			<div class="feature-box">
				<i class="flaticon-151-banker"></i>
				<h5>ECO-FRIENDLY HOMES</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
			</div>		
			<div class="feature-box">
				<i class="flaticon-151-security-system"></i>
				<h5>SECURE AREA</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
			</div>		
			<div class="feature-box">
				<i class="flaticon-151-maps-and-flags-1"></i>
				<h5>FREE PARKING</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
			</div>		
			<div class="feature-box">
				<i class="flaticon-151-step-ladder"></i>
				<h5>COMUNITY POOL</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
			</div>		
			<div class="feature-box">
				<i class="flaticon-151-real-estate-6"></i>
				<h5>BEST DEALS</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
			</div>		
		</div>
	</section>
	<!-- Features section end-->

	<!-- Call to action section -->
	<section class="call-to-action-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container text-white text-center">
			<h2>Ask our top realtors for a personalized offer today. </h2>
			<button class="site-btn sb-light sb-big">CALL +251 910697186</button>
			<a href="{{route('property')}}"><button class="site-btn sb-light sb-big">View more Properties</button></a>
		</div>
	</section>
	<!-- Call to action section end-->
	
	@include('partials.footer')

	
	<!--====== Javascripts & Jquery ======-->

    @endsection