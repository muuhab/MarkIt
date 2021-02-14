<div class="overlay"></div>

<div class="utility-nav d-none d-md-block" style="height:35px; background:#F5F5F5; ">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="small">
              <i class="fas fa-envelope"></i> logo@example.com | <i class="fas fa-phone"></i> +91-9876543210
          </p>
        </div>

        <div class="col-12 col-md-6 text-right">
          <p class="small">Free shipping on total of $99 of all products</p>
        </div>
      </div>
    </div>
  </div>




<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
  <div class="container">

    <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
                <i class="bx bx-menu icon-single"></i>
            </button>

    <a class="navbar-brand" href="{{route('home')}}">
      <h4 class="font-weight-bold">E-Commerce</h4>
    </a>




    <div class="collapse navbar-collapse">
      <form class="form-inline my-2 my-lg-0 mx-auto" method="GET" action="{{route('search')}} ">
        <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search" name="search">
        <button class="navbar-button  col-xs-1"><i class="fas fa-search"></i></button>
      </form>





      <ul class="navbar-nav">

        @if(!Auth::guest())
        <li class="nav-item">
          <a class="btn btn-link" href="{{route('cart.index')}}">
            <i class="fas fa-shopping-cart pl-0"></i>
            <span class="badge badge-danger">3</span>
        </a>
        </li>
        @endif


        @guest
        <li class="nav-item ml-md-3">
          <a class="btn btn-primary" href="{{ route('signin') }}"><i class="bx bxs-user-circle mr-1"></i> Log In / Register</a>
        </li>

        @else


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="far fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="/home" class="dropdown-item">Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

        @endguest

      </ul>
    </div>

  </div>
</nav>


<!--
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 -->


