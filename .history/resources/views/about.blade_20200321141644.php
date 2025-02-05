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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris congue.</p>
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
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem. Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
						<p>Vivamus eget porta nulla. Etiam elementum lacinia turpis, a tincidunt est dignissim sit amet.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-slider owl-carousel">
						<img src="img/about/1.jpg" alt="">
						<img src="img/about/1.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->
	
	<!-- Milestone section end -->
	<section class="milestone-section">
		<div class="milestone-warp">
			<div class="milestone">
				<h2>2</h2>
				<h4>Residential  Developed</h4>
			</div>
			<div class="milestone">
				<h2>167</h2>
				<h4>Homes Builded</h4>
			</div>
			<div class="milestone">
				<h2>25</h2>
				<h4>Years of Experience</h4>
			</div>
			<div class="milestone">
				<h2>0</h2>
				<h4>Complains</h4>
			</div>
			<div class="milestone">
				<h2>5</h2>
				<h4>Offices</h4>
			</div>
		</div>
	</section>
	<!-- Milestone section end -->


	<!-- Team section -->
	<section class="team-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="team-member">
						<div class="member-pic">
							<img src="img/team/1.jpg" alt="">
							
						</div>
						<div class="member-info">
							<h4>JANE DOE</h4>
							<h5>General Manager</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Maecenas sed sollici-tudin sem.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="team-member">
						<div class="member-pic">
							<img src="img/team/2.jpg" alt="">
							<a href="#" class="member-link">+</a>
						</div>
						<div class="member-info">
							<h4>JANE DOE</h4>
							<h5>General Manager</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Maecenas sed sollici-tudin sem.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="team-member">
						<div class="member-pic">
							<img src="img/team/3.jpg" alt="">
							<a href="#" class="member-link">+</a>
						</div>
						<div class="member-info">
							<h4>JANE DOE</h4>
							<h5>General Manager</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Maecenas sed sollici-tudin sem.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="team-member">
						<div class="member-pic">
							<img src="img/team/4.jpg" alt="">
							<a href="#" class="member-link">+</a>
						</div>
						<div class="member-info">
							<h4>JANE DOE</h4>
							<h5>General Manager</h5>
							<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Maecenas sed sollici-tudin sem.</p>
						</div>
					</div>
				</div>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Phasellus eget nibh nec nibh porta semper a nec turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="design-text">
						<h4>WORK REMOTE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  Praesent viverra non massa id condimentum. Morbi malesuada laoreet neque, id mattis neque ullamcorper eget. Vivamus aliquam tempus velit, sit amet scelerisque diam scelerisque ut. Donec venenatis dolor eu ante tincidunt varius. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About box text end -->

	@include('partials.footer')

        

        @endsection