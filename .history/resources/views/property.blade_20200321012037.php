@extends('master')
@section('extra-styles')
<style>
body{
    margin-top:70px;
}
.navbar{
    background-color:#353649;
}
</style>
<link rel="stylesheet" href="{{asset('css/algolia.css')}}">

@endsection

@section('content')

	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div>
	 -->
	<!-- Header section -->
   
	<header class="header-section">
            @include('partials.nav')
	</header>

<section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                                <h5>                                    {!!$property->description!!}</h5>
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
                                <p>

                                    {!!$property->details!!}
                                </p>
                               
                            
                            </div>
                            <hr>
                            <br>
                        
                            <div class="row">
                                    <span>{{$property->presentprice()}}</span>
                            </div>
                    </div><!--end of col-md-12-->
                
                </div>
                 <hr>
            </div>
</section>

            @include('partials.footer')

    @endsection

    @section('extra-js')
	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
	   <script src="{{asset('js/algolia.js')}}"></script>

	@endsection