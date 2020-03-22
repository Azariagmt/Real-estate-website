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
<div class="col-md-8"><h2>Have a property you want off your hands?</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form method="post" action="{{url('multiuploads')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="title">Bedrooms:</label>
            <input type="text" class="form-control" name="bedrooms">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="document">Document:</label>
            <input type="file" class="form-control" name="photos[]" multiple>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </div>
</form>
</div>
</div>
</div>

@include('partials.footer')

@endsection

@section('extra-js')
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
   <script src="{{asset('js/algolia.js')}}"></script>

@endsection