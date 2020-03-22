@extends('master')
@section('extra-styles')
<style>
.spad{
    margin-top:50px;
}
.navbar{
    background-color:#353649;
}
</style>
<link rel="stylesheet" href="{{asset('css/algolia.css')}}">

@endsection
@section('content')

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
		<!-- Header section -->
        <header class="header-section";>
		<!-- logo -->
		<a href="{{route('landing-page')}}" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{route('property')}}">Properties</a></li>
				<li><a href="{{route('selling')}}">Selling</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>				
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div>
	</header>
    <!-- Header section end -->

        <p>Hi,</p>

<p>Please download the attached file.</p>
Senders Name: {{$name}}<br>
Bedrooms: {{$bedrooms}}
<p>Thanks</p>

        
        <script src="" async defer></script>
    </body>
</html>

