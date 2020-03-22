
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
{{$name}}
{{$bedrooms}}
<p>Thanks</p>

        
        <script src="" async defer></script>
    </body>
</html>

