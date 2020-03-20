	<!-- Features section -->
	<section class="features-section">
		<div class="container">
			<div class="section-title">
				<h2>We provide</h2>
			</div>
		</div>
		@foreach($provides as $provide)
		<div class="features-slider owl-carousel">
			<div class="feature-box">
				<i class="{{ $provide->icon}}"></i>
				<h5>{{ $provides->title }}</h5>
				<p>{{ $provides->text}} </p>
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
