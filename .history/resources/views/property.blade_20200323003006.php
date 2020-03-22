@extends('master')
@section('extra-styles')
<style>
.spad{
    margin-top:50px;
}
.navbar{
    background-color:#353649;
}
.property-section-thumbnail{
margin-left:15px;
}
.thumbnail-row, p{
    margin-top:15px;
}

</style>
<link rel="stylesheet" href="{{asset('../css/algolia.css')}}">
<link rel="stylesheet" href="{{asset('../css/flaticon.css')}}"/>

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

                <div class="col-md-6" >
                    <img src="{{asset('storage/'. $property->image)}}" class="active"id="currentImage" width="400px;"alt="{{$property->slug}}">
								<a href="#" class="room-content">
								<i class="flaticon-heart"></i>
                            </a>
                            <div class="row thumbnail-row">

                            <div class="product-section-thumbnail selected">
                    <img src="{{ productImage($product->image) }}" alt="product">
                </div>

                @if ($property->images)
                    @foreach (json_decode($property->images, true) as $image)
                        <div class="property-section-thumbnail border" >
                            <img src="{{asset('storage/'. $image)}}" alt="property" width="50px">
                        </div>
                    @endforeach
                @endif
</div>

                </div>
                
                        
                <div class="col-md-6 sider">
                <h5>{!!$property->description!!}</h5>
        
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
                                <p>

                                    {!!$property->details!!}
                                </p>
                               
                                <div class="row">
                                    <span><b>{{$property->presentprice()}}</b></span>
                            </div>
                        </div>
                            <hr>
                            <br>
                    </div><!--end of col-md-12-->
 
            </div>
</section>

            @include('partials.footer')

    @endsection

    @section('extra-js')
    <script>

(function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.property-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
        </script>
	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
	   <script src="{{asset('../js/algolia.js')}}"></script>

	@endsection