	<!-- Features section -->
	<section class="features-section">
		<div class="container">
			<div class="section-title">
				<h2>We provide</h2>
			</div>
		</div>
		
		<div class="features-slider owl-carousel">
			@foreach($provides as $provide)
			<div class="feature-box">
				<i class="{{ $provide->icon}}"></i>
				<h5>{{ $provide->title }}</h5>
				<p>{{ $provide->text}} </p>
			</div>
			@endforeach		
			
		</div>
	</section>
	<!-- Features section end-->
