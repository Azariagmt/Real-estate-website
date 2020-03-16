<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
<a href="{{route('landing-page')}}" class="site-logo navbar-brand">
			<img src="img/logo.png" alt="">
		</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="row">

    <ul class="navbar-nav ">
        <ul style="list-style:none;">
            <li class="nav-item ">
                    <a class="nav-link text-white" href="#"><i class="fa fa-user" aria-hidden="true"></i> Hello, Sign in</a>
                </li>
            
                <li class="nav-item">
                <a class="nav-link text-white" href="#">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                </a>
            </li>
        </ul>
    </ul>
    </div>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>