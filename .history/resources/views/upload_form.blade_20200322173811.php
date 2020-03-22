@extends('master')
@section('extra-styles')
<style>
.spad{
    margin-top:50px;
}
.navbar{
    background-color:#353649;
}

#dropContainer{
    border:1px solid grey;
    height:200px; 
    width:100%;
    text-align:center;
    line-height:200px !important;
}
#dropContainer:hover{
    border:1.4px solid blue;
    height:200px; 
    width:100%;
    text-align:center;
    line-height:200px;
}
.desc{
    line-height:200px !important;

}
.desc:hover{
    font-weight:1.2%;
    color:blue;
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
        <div class="form-group col-md-10">
            <label for="name">Name:</label>
            <input type="text" class="form-control border" name="name" autofocus>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-10">
        <label for="tel">Phone Number:</label>
            <input type="tel" class="form-control border" name="tel">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-10">
        <label for="email">Email:</label>
            <input type="email" class="form-control border" name="email">
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-4">
            <label for="total">Total rooms:</label>
            <input type="number" class="form-control border" name="total" min="0">
        </div>
        <div class="form-group col-md-4">
            <label for="bedrooms">Bedrooms:</label>
            <input type="number" class="form-control border" name="bedrooms" min="0">
        </div>
        <div class="form-group col-md-4">
            <label for="bathrooms">Bathrooms:</label>
            <input type="number" class="form-control border" name="bedrooms" min="0">
        </div>
    </div>

      
    <div class="row">
        <div class="form-group col-md-4">
            <label for="parking">Parking:</label>
            <input type="number" class="form-control border" name="parking" min="0">
        </div>
        <div class="form-group col-md-4">
            <label for="size">Size():</label>
            <input type="number" class="form-control border" name="size" min="0">
        </div>
        <div class="form-group col-md-4">
            <label for="title">Price:</label>
            <input type="number" class="form-control border" name="bedrooms" min="0">
        </div>
    </div>

<div class="row form-group">
<label for="w3mission">Description (optional)</label>

<textarea id="w3mission" rows="4" cols="50">
</textarea>

</div>
    <div class="row">

         <div id="dropContainer" >
         
        <h5 class="desc"> Drag and Drop Images</h5>

      
        </div>
        <input type="file" id="fileInput"  name="photos[]" multiple />

    
        <!-- <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="document">Document:</label>
            <input type="file" class="form-control" name="photos[]" multiple>
        </div> -->
       
    </div>
    <p>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-raised btn-primary">Upload Property</button>
        </div>
    </div>
</form>
</div>
</div>
</div>

@include('partials.footer')

@endsection

@section('extra-js')
<script>
dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
  evt.preventDefault();
};

dropContainer.ondrop = function(evt) {
  // pretty simple -- but not for IE :(
  fileInput.files = evt.dataTransfer.files;

  // If you want to use some of the dropped files
  const dT = new DataTransfer();
  dT.items.add(evt.dataTransfer.files[0]);
  dT.items.add(evt.dataTransfer.files[3]);
  fileInput.files = dT.files;

  evt.preventDefault();
};
</script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
   <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
   <script src="{{asset('js/algolia.js')}}"></script>

@endsection