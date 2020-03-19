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
             
          

                   <div class="" >
                      <a href="tel:+251-910-697-186" class="nav-link text-white">         <i class=" text-white fa fa-phone"></i> +251-910-697-186</a>
                              </div>
                  
                      <div class="">
                      
                                  <a href="tel:+251-910-697-186" class="nav-link text-white">          <i class=" text-white fa fa-phone"></i>+251-910-697-186</a>
                  
                      </div>
                </div>
              </div>
              <div class="col-md-6 float-left">
               <div class="row float-right" >
                  <div class="" >
                          <a class="nav-link text-white mx-auto float-right" href="#"><i class="fa fa-sale" aria-hidden="true"></i> Selling a property</a>
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
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
            </ul>
        </ul>
    </ul>
 

  
  </div>
</nav>