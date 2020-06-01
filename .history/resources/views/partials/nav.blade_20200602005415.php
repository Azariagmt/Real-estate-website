<nav class="navbar navbar-expand-lg navbar-light bg-none fixed-top mx-auto" >
    <a href="{{route('landing-page')}}" class="site-logo navbar-brand" style="margin-left:30px;">
			@foreach($logo as $logo)
      @foreach (json_decode($logo->logo, true) as $image)
      <img src="{{asset('storage/'. $image)}}" alt="" class="img-fluid" width="60px">
      @endforeach
      @endforeach
		</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <div class="nav-switch">
			<i class="fa fa-bars"></i>
  </div>
  </button>
  <div class="collapse navbar-collapse row mx-auto" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto col-lg-12 .d-none .d-md-block .d-lg-block">
      <ul style="list-style:none;" class="col-md-12">
        <li class="nav-item row">
       
            <div class="col-md-6">
              <div class="row ">
                  @foreach($phones as $phone)
                   <div class="" >
                      <a href="tel:+{{$phone->phone1}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{$phone->phone1}}</a>
                              </div>

                              <div class="" >
                      <a href="tel:+{{$phone->phone2}}" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +{{$phone->phone2}}</a>
                              </div>
<!--                    -->@endforeach
              </div>
              </div>
            <div class="col-md-6 float-left">
             <div class="row float-right" >
                <div class="" >
                      <a class="nav-link text-white btn-outline-primary mx-auto float-right border" style="font-weight:bold;" href="{{route('sellProperty')}}"><i class="fa fa-sale" aria-hidden="true"></i> Selling a property?</a>
                </div>

              </div>
              </div>
            
        </li>

      <ul class="navbar-nav  main-menu border row" style="background-color:#9e9e9e;">

      <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('property')}}">Properties</a>
      </li> -->
      <li class="nav-item dropdown border col-md-12 col-lg-2 col-xl-2" >
        <a class="nav-link dropdown-toggle mx-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($location as $location )
            <a class="dropdown-item {{request()->location == $location->slug?'active':''}}" href="{{route('property' , ['location'=>$location->slug] )}}">{{$location->name}}</a>
            @endforeach
        </div>
      </li>
      <li class="nav-item dropdown border col-md-12 col-lg-2 col-xl-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Type
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach($type as $type)
          <a class="dropdown-item {{request()->type == $type->slug?'active':''}}" href="{{route('property', ['type'=>$type->slug])}}">{{$type->name}}</a>
         @endforeach
        </div>
      </li>
      <li class="nav-item dropdown border col-md-12 col-lg-2 col-xl-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach($status as $status)
          <a class="dropdown-item {{request()->status == $status->slug?'active':''}}" href="{{route('property', ['status'=>$status->slug])}}">{{$status->name}}</a>
         @endforeach
        </div>
      </li>
      <li class="col-md-12 col-lg-2 col-xl-2" style="padding:0;">
      <a href="{{route('property')}}" style="font-size:12px;  font-weight:bold; background-color:#cfd8dc;">View all <br>Properties</a>
      </li>
      <div class="form-inline my-lg-0 mx-auto aa-input-container col-md-12 col-lg-4 col-xl-3"  id="aa-input-container" >
          <input type="search" style="position-fixed;"id="aa-search-input" class="aa-input-search " aria-label="Search"  placeholder="Search for properties" name="search"
          autocomplete="off" />
          <button class=" text-white btn btn-raised btn-primary my-2 my-sm-0" style="margin-left:200px;"type="submit"><i class="fa fa-search"></i></button>
      </div>

    </ul>
  </ul>
</ul>



  </div>
</nav>
