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
    @if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container spad">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"><h4>Your property has been successfully sent. please wait up to 24 hrs to view your listing on our site. If there are any questions about your listing we will contact you soon.</h4>
<a href="{{route('property')}}" class="btn btn-" >Browse properties.</a>

</div>
</div>

    @endsection