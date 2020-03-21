
@extends('master')

<!-- @section('title')
	Search Algolia | Atkelttera
@endsection -->


@section('extra-styles')

<style>
.spad{
    margin-top:50px;
}
.navbar{
    background-color:#353649;
}

</style>
<link rel="stylesheet" href="{{asset('../css/flaticon.css')}}"/>
<!-- 
<link rel="stylesheet" href="{{ asset('css/algolia.css') }}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch-theme-algolia.min.css">
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
    
<div class="row spad .no-gutters">
	   <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container">
        <div class="search-results-container-algolia ">
            <div class="row">
                <div class="col-md-4">
                    <h2>Search</h2>
                    <div id="search-box">
                        <!-- SearchBox widget will appear here -->
                    </div>

                    <div id="stats-container"></div>

                    <div class="spacer"></div>
                    <h4>Location</h4>
                    <div id="refinement-list-one">
                        <!-- RefinementList widget will appear here -->
                    </div>
                    <div class="spacer"></div>
                    <h4>Status</h4>
                    <div id="refinement-list-two">
                        <!-- RefinementList widget will appear here -->
                    </div>
                    <div class="spacer"></div>
                    <h4>Type</h4>
                    <div id="refinement-list-three">
                        <!-- RefinementList widget will appear here -->
                    </div>
                </div>

                <div class="col-md-8">
                    <div id="hits">
                        <!-- Hits widget will appear here -->
                    </div>

                    <div id="pagination">
                        <!-- Pagination widget will appear here -->
                    </div>
                </div>
            </div> <!-- end search-results-container-algolia -->
        </div>
    </div> <!-- end container -->
  


</div>


</div>
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0"></script>
    <script src="{{ asset('js/algolia-instantsearch.js') }}"></script>
@endsection
