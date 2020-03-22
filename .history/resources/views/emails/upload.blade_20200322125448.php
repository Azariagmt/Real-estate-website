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
   
	<header class="header-section">
            @include('partials.nav')
	</header>

        <p>Hi,</p>

<p>Please download the attached file.</p>
Senders Name: {{$name}}<br>
Bedrooms: {{$bedrooms}}
<p>Thanks</p>

        
        <script src="" async defer></script>
    </body>
</html>

