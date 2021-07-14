
<div class="utility-nav d-none d-md-block pt-1 pb-1 nav1 text-light" style="height:30px; background:#26272B; ">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="small">
              <i class="fas fa-envelope"></i> test@test.com | <i class="fas fa-phone"></i> +91-9876543210
          </p>
        </div>

        <div class="col-12 col-md-6 text-right">
          <p class="small">Free shipping on total of $99 of all products</p>
        </div>
      </div>
    </div>
  </div>





<nav class="navbar navbar-expand-lg row mx-auto w-100 pr-3 pl-3 p-2 navbar-light bg-light">

    <a class="navbar-brand pl-3" href="{{route('home')}}">
        <ul class="navbar-nav  list-group list-group-horizontal">

            <li class="nav-item ">
                <h4 class="font-weight-bold mt-2 ">MarkIt</h4>
            </li>

            <li class="nav-item ml-1 ">
                    {{-- /storage/images/unnamed.png --}}
                <img src="/storage/images/unnamed.png" style="width:30px; height:30px; " class="mb-1"  >
            </li>

        </ul>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="cat col-2">
            <span class="float-right pr-2">Categories</span>
         </div>


         <div class="search-bar col-5">
            <form class=" m-0 row w-100" method="GET" action="{{route('search')}} ">
                <button class="navbar-btn col-1" type="submit"><span class="fas fa-search search-icon"></span></button>
                <input class="col-11 search-input" type="text" placeholder="Search for products..." aria-label="Search" name="search">

            </form>
        </div>

                    {{--  select category for phone  --}}

        <ul class="navbar-nav mr-auto categories col-12 mx-auto">
            <li class="nav-item dropdown">
                <div  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <a class="nav-link d-inline-block col-11 pl-3 " >
                        Select Category
                    </a>
                    <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                    <a href="{{ route('cat',['cat'=>'Fashion'])}}" class="dropdown-item">
                        <i class="fas fa-tshirt"></i>
                        <span class="text">Fashion</span>
                    </a>


                    <a href="{{ route('cat',['cat'=>'Health & Beauty'])}}" class="dropdown-item">
                        <i class="fas fa-mortar-pestle"></i>
                        <span  class="text">Health & Beauty</span>
                    </a>


                    <a href="{{ route('cat',['cat'=>'Phones & Tablets'])}}" class="dropdown-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span class="text">Phones & Tablets</span>
                    </a>


                    <a href="{{ route('cat',['cat'=>'Home & Office'])}}" class="dropdown-item">
                        <i class="fas fa-home"></i>
                        <span class="text">Home & Office</span>
                    </a>


                    <a href="{{ route('cat',['cat'=>'Books'])}}" class="dropdown-item">
                        <i class="fas fa-book"></i>
                        <span class="text">Books</span>
                    </a>


                    <a href="{{ route('cat',['cat'=>'Electronics'])}}" class="dropdown-item">
                        <i class="fas fa-tv"></i>
                        <span class="text">Electronics</span>
                    </a>


                </div>
            </li>
        </ul>
                    {{--  select category end   --}}


      <ul class="navbar-nav justify-content-end mr-auto col-5">

        <a class=" nav-item btn btn-link" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart pl-0"></i><span class="badge badge-danger"></span></a>

        @guest
        <li class="nav-item ml-md-3">
          <a class="btn btn-primary" href="{{ route('signin') }}">Log in</a>
        </li>
        <li class="nav-item ml-md-3">
            <a class="btn btn-primary" href="{{ route('signin') }}">Sign up</a>
        </li>

        @else


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="far fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="/dashboard" class="dropdown-item">Dashboard</a>
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
  </nav>




