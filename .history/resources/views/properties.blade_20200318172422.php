@extends('master')
@section('content')

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section" style="background-color:#353649;">
		<!-- logo -->
		<a href="{{route('landing-page')}}" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
                <div class="col-md-6" style="float:left;">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </div>
                <!-- <div class="clear-fix" style="clear:both;"></div>
                <div class="col-md-6"style="float:right;">
                        <a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
                </div> -->
			</ul>
		</div>
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
                    
                        <div class="row" data-setbg="{{ asset('img/property-gallery/1.jpg')}}" style="background-image: {{ asset('img/property-gallery/1.jpg') }};">
                       <a href="{{route('property-selected', $property->slug) }}"> <img src="{{ asset('img/property-gallery/'.$property->slug.'.jpg') }}"></a>
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <hr>
                        
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
                @empty
                <div>
                No properties found.
                </div>
                @endforelse
                {{$properies}}
            </div>
        </div>
    </section>

    @include('partials.footer')

    @endsection