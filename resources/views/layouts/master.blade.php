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
    <script src="https://kit.fontawesome.com/e104588b0b.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product_details.css') }}" rel="stylesheet">

    <link href="{{ asset('themes/css/nav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/css/footer.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>


        @include('inc.nav')
        <div id="mainBody">
            <div class="container"  >
                <div class="row"  >

                    <div class="col-2"  >
                        @include('inc.sidebar')
                    </div>

                    <div class="col-1" style=" max-width:50px;" ></div>


                    <div class="col-9"  >
                        <div style=" min-height: 384px;  ">
                             @yield('content')
                        </div>
                    </div>


                </div>
	        </div>
        </div>
            @include('inc.footer')
        <script src="{{URL::to('/themes/js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('/themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('/themes/js/google-code-prettify/prettify.js')}}"></script>
        <script src="{{URL::to('themes/js/bootshop.js')}}"></script>
        <script src="{{URL::to('themes/js/jquery.lightbox-0.5.js')}}"></script>





    </body>
</html>
