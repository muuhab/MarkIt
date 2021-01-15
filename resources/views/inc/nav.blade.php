<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
      <div class="navbar-inner">
        <a class="brand" href="{{url('/')}}"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
            <form class="form-inline navbar-search" method="post" action="products.html" >
            <input id="srchFld" class="srchTxt" type="text" />
              <select class="srchTxt">
                <option>All</option>
                <option>CLOTHES </option>
                <option>FOOD AND BEVERAGES </option>
                <option>HEALTH & BEAUTY </option>
                <option>SPORTS & LEISURE </option>
                <option>BOOKS & ENTERTAINMENTS </option>
            </select> 
              <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a href="{{route('signin')}}"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
                                </li>
                            @endif
                            
                           
                        @else
                            <li class="nav-item dropdown  ">
                                <a  href="{{route('home')}}"  >
                                  <span class="navbbar-brand">
                                    {{$name}}
                                  </span>
                                  </a>
                                </li>
                                <li>

                                
                                <a   href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                      </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
        
        </ul>
      </div>
    </div>
    </div>
    </div>
    <!-- Header End====================================================================== -->