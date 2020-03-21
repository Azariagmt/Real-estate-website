@extends('master')
@section('extra-styles')
<style>
.btn-raised{
	position:fixed !important;
}
.aa-input-search{
	margin:0px !important;
}
</style>
<link rel="stylesheet" href="{{asset('css/algolia.css')}}">

@endsection
@section('content')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
   
	<header class="header-section">
            @include('partials.nav')
	</header>
	<!-- Header section end -->
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{optional($aboutsNoCollection->banner_image}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>About Us</h2>
						<p>{{$abouts->banner_description}}</p>
					</div>
				</div>
			</div>
		</div>
		@include('partials.hero-social')
	</section>
	<!-- Page top section end -->

	<!-- About section -->
	<section class="about-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-text">
						<h4>{{$abouts->detail_title}}</h4>
						<p>{{$abouts->detil_description}}</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-slider owl-carousel">
						<img src="{{$abouts->slider_image_1}}" alt="">
						<img src="{{$abouts->slider_image_2}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->
	
	<!-- Milestone section end -->
	<section class="milestone-section">
		<div class="milestone-warp">
			@foreach($abouts as $milestone)
			<div class="milestone">
				<h2>{{$milestone->milestone_count}}</h2>
				<h4>{{$milestone->milestone}}</h4>
			</div>
			@endforeach
		</div>
	</section>
	<!-- Milestone section end -->


	<!-- Team section -->
	<section class="team-section">
		<div class="container">
			<div class="row">
				@foreach($employees as $employee)
				<div class="col-lg-6">
					<div class="team-member">
						<div class="member-pic">
							<img src="{{$employee->image}}" alt="">
							
						</div>
						<div class="member-info">
							<h4>{{$employee->name}}</h4>
							<h5>{{$employee->title}}</h5>
							<p>{{$employee->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Team section end -->

	<!-- About box text -->
	<div class="about-text-box-warp spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="design-text">
						<h4>JOIN OUR TEAM </h4>
						<p>{{$abouts->join_our_team}} </p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="design-text">
						<h4>WORK REMOTE</h4>
						<p>  {{$abouts->work_remote}} </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About box text end -->

	@include('partials.footer')

        

        @endsection