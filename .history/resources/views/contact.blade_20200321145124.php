@extends('master')


@section('content')

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<!-- logo -->
		<a href="{{route('landing-page')}}" class="site-logo">
			<img src="{{asset('img/yenebet-logo.png')}}" width="60px" alt="yenebet-logo">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>
	<!-- Header section end -->
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Contact Us </h2>
						@foreach($phones as $phone)
                   		<div class="" >
                      <a href="tel:+{{optional($phones)->phone1}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{$phone->phone1}}</a>
                              </div>

                              <div class="" >
                      <a href="tel:+{{optional($phone->phone2}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{$phone->phone2}}</a>
                              </div>
<!--                    -->@endforeach
					</div>
				</div>
			</div>
		</div>
@include('partials.hero-social')
	</section>
	<!-- Page top section end -->

@endsection