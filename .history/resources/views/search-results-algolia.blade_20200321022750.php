
@extends('master')

<!-- @section('title')
	Search Algolia | Atkelttera
@endsection -->


@section('extra-styles')


<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch-theme-algolia.min.css">
@endsection


@section('content')
<div class="row  position-fixed .no-gutters">
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
        <div class="search-results-container-algolia">
            <div class="row">
                <div class="col-md-4">
                    <h2>Search</h2>
                    <div id="search-box">
                        <!-- SearchBox widget will appear here -->
                    </div>

                    <div id="stats-container"></div>

                    <div class="spacer"></div>
                    <h2>Categories</h2>
                    <div id="refinement-list">
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
  
    <div class="container-fluid" style="margin-top:40px;">
            @if((auth()->user()) && (Cart::instance('favorites')->count() > 0))
                    @include('favorites.items-in-favorites')
            elseif((auth()->user()) && (Cart::instance('favorites')->count() <= 0))
                    @include('favorites.favorites-empty-small')
            @elseif((!(auth()->user())))
                    @include('favorites.pre-favorites-small')
            @endif
        </div>
    @include('partials.footer')

</div>


</div>
@endsection


@section('scripts')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0"></script>
    <script src="{{ asset('js/algolia-instantsearch.js') }}"></script>
@endsection
