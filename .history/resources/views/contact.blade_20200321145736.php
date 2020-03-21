@extends('master')

@section('extra-styles')
<style>
	.tel{
		margin-bottom:15px;
	}
	</style>
@endsection
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
	<section class="page-top-section set-bg" data-setbg="{{optional($aboutsNoCollection)->banner_image}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Contact Us </h2>
                   		<div class="tel" >
                      <a href="tel:+{{optional($phones)->phone1}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{optional($phones)->phone1}}</a>
                              </div>

                              <div class="" >
                      <a href="tel:+{{optional($phones)->phone2}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{optional($phones)->phone2}}</a>
                              </div>

					</div>
				</div>
			</div>
		</div>
@include('partials.hero-social')
	</section>
	<!-- Page top section end -->

@endsection