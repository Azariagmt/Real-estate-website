<nav class="navbar navbar-expand-lg navbar-light bg-none fixed-top mx-auto" >
    <a href="{{route('landing-page')}}" class="site-logo navbar-brand" style="margin-left:30px;">
			<img src="img/yenebet-logo.png" alt="" class="img-fluid" width="60px">
		</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <div class="nav-switch">
			<i class="fa fa-bars"></i>
  </div>
  </button>
  <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <ul style="list-style:none;">
        <li class="nav-item ">
          <div class="row">
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
                          <a class="nav-link text-white btn-outline-primary mx-auto float-right border" style="font-weight:bold;" href="#"><i class="fa fa-sale" aria-hidden="true"></i> Selling a property?</a>
                  </div>

              </div>
</div></div>
            </li>

                <ul class="navbar-nav  main-menu border" style="background-color:#9e9e9e;">

      <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('property')}}">Properties</a>
      </li> -->
      <li class="nav-item dropdown border" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($location as $location )
            <a class="dropdown-item {{request()->location == $location->slug?'active':''}}" href="{{route('property' , ['location'=>$location->slug] )}}">{{$location->name}}</a>
            @endforeach
        </div>
      </li>
      <li class="nav-item dropdown border">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Property Type
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach($type as $type)
          <a class="dropdown-item {{request()->type == $type->slug?'active':''}}" href="{{route('property', ['type'=>$type->slug])}}">{{$type->name}}</a>
         @endforeach
        </div>
      </li>
      <li class="nav-item dropdown border">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Property status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach($status as $status)
          <a class="dropdown-item {{request()->status == $status->slug?'active':''}}" href="{{route('property', ['status'=>$status->slug])}}">{{$status->name}}</a>
         @endforeach
        </div>
      </li>
      <li >
      <a href="{{route('property')}}" style="font-size:12px;  font-weight:bold; background-color:#cfd8dc;">View all <br>Properties</a>
      </li>
      <div class="form-inline my-lg-0 mx-auto aa-input-container "  id="aa-input-container" >
          <input type="search" id="aa-search-input" class="aa-input-search " aria-label="Search"  placeholder="Search for properties" name="search"
          autocomplete="off" />
          <button class=" text-white btn btn-raised btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      </div>
<!--
      <div class="aa-input-container" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search with algolia..." name="search"
        autocomplete="off" />
    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg>
</div> -->

            </ul>
        </ul>
    </ul>



  </div>
</nav>
