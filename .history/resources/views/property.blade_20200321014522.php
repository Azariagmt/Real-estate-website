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
	
	
	<!-- Header section -->
   
	<header class="header-section">
            @include('partials.nav')
    </header>
    @endsection

    @section('extra-js')
	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
	   <script src="{{asset('js/algolia.js')}}"></script>

	@endsection