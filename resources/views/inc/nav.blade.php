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

    <a class="navbar-brand" href="#">
      <h4 class="font-weight-bold">E-Commerce</h4>
    </a>



    <ul class="navbar-nav ml-auto d-block d-md-none">
      <li class="nav-item">
        <a class="btn btn-link" href="#"><i class="fas fa-shopping-cart"></i><span class="badge badge-danger">3</span></a>
      </li>
    </ul>




    <div class="collapse navbar-collapse">
      <form class="form-inline my-2 my-lg-0 mx-auto">
        <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search">
        <button class="navbar-button  col-xs-1"><i class="fas fa-search"></i></button>
      </form>





      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-link" href="#">
            <i class="fas fa-shopping-cart pl-0"></i>
            <span class="badge badge-danger">3</span>
        </a>
        </li>



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



