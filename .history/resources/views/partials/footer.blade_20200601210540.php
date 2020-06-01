	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-2 col-sm-12">
					<div class="footer-widget">
					<a href="{{route('landing-page')}}" class="site-logo navbar-brand" style="margin-left:30px;">
						<img src="{{asset('img/yenebet-logo.png')}}" width="60px"alt="yenebet logo">
						</a>
					</div>
					<info></info>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-4">
					<div class="footer-widget">
						<h5>COMPANY</h5>
						<ul>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="">Offices</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-4">
					<div class="footer-widget">
						<h5>LEGAL</h5>
						<ul>
							<li><a href="">Documents</a></li>
							<li><a href="">How to buy a house</a></li>
							<li><a href="">Terms & Condition</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-4">
					<div class="footer-widget">
						<h5>SOCIAL</h5>
						<div class="footer-social">
						@foreach($social as $social)
							<a href="{{$social->link}}"><i class="{{$social->icon}}"></i></a>
						@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Yenebet
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
 <span style="color:grey;">website by </span><a href="http:\\azariagmt.github.io" target="_blank">Azaria</a>
		</div>
	</footer>
	<!-- Footer section end-->