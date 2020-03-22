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

@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"> <img src="/32114.svg" width="80" /></div>
<div class="col-md-8"><h2>Laravel Multiple File Uploading With Bootstrap Form</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/multiuploads" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Product Name">Product Name</label>
<input type="text" name="name" class="form-control"  placeholder="Product Name" >
</div>
<label for="Product Name">Product photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="document" multiple />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
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