<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/e104588b0b.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product_details.css') }}" rel="stylesheet">

    <link href="{{ asset('css/mainBody.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sideBar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="grid-body">
            <header>
                @include('inc.nav')
            </header>


            <main class=" container_main">

                <!-- Left sidebar -->
                <aside class="container_left pt-2">
                    @include('inc.sidebar')
                </aside>

                <!-- Main content -->
                <article class="container_middle ">
                    <div class="pr-3 pl-3 pb-2 pt-2">
                    @yield('content')
                    </div>
                </article>

            </main>

            <footer>
                @include('inc.footer')
            </footer>
        </div>



        {{--
        @include('inc.nav')

        <div id="mainBody">

                <div class="row "  >

                    <div class="col-lg-1"></div>

                    <div class="col-lg-2 pl-0 col-md-2 sidebarDiv bg-secondary" >
                        @include('inc.sidebar')
                    </div>

                    <div class="col-lg-8 bg-danger col-md-12 contentDiv" style=" min-height: 384px;"  >
                        @yield('content')
                    </div>

                    <div class="col-lg-1"></div>

                </div>

        </div>


            @include('inc.footer')

            --}}


{{--
     @include('inc.nav')
        <div id="mainBody">
                <div class="row  " >

                    <div class="col-1" style=" max-width:50px;" ></div>

                    <div class="col-2 sidebarDiv"  style="margin-left: 5px;" >
                        @include('inc.sidebar')
                    </div>

                    <div class="col-1" style=" max-width:50px;" ></div>


                    <div class="col-lg-8 col-md-12 contentDiv" style=" min-height: 384px;"  >

                             @yield('content')

                    </div>

                    <div class="col-2" ></div>


                </div>

        </div>
            @include('inc.footer')
    --}}




    </body>
</html>
