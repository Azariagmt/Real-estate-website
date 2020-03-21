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
			<img src="{{asset('img/yenebet-logo.png')}}" alt="yenebet-logo">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
			<li><a href="{{route('property')}}">Properties</a></li>
				<li><a href="{{route('contact')}}">Selling</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>		
			</ul>
		</div>
	</header>
	<!-- Header section end -->
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Contact</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris congue.</p>
					</div>
				</div>
			</div>
		</div>
@include('partials.hero-social')
	</section>
	<!-- Page top section end -->

	<!-- Contact section-->

	<!-- Contact section end-->

	@include('partials.footer')

@endsection