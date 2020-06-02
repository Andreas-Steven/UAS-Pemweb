<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- CSS + JS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick-theme.css') }}">
        <link href="{{ asset('/sesoul/style.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            #footer{
                width: 100%;
                height:50px;
                line-height: 50px;
                background:#333;
                color:#fff;
                text-align: center;
                margin-top: 10px;
                bottom: 0px;
                left: 0px;
                position: fixed; 
                bottom: 0px;
            }
        </style>
        <script>
            var footerResize = function() {
                $('#footer').css('position', $("body").height() + $("#footer").innerHeight() > $(window).height() ? "inherit" : "fixed");
            };
            $(window).resize(footerResize).ready(footerResize);
        </script>   

        <!--NAVBAR-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light " >
            <a class="navbar-brand" href="#">KIBAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item flex-row-reverse">
                    <a class="nav-link" href="/Profile/{{ Cookie::get('ID') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/History/{{ Cookie::get('ID') }}">Transaction History</a>
                </li>
                </ul>
                <div style="text-align:right">
                    <form class="form-inline my-2 my-lg-0"; action="/home/search" method="GET">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" value="{{ old('search') }}" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="SEARCH">Search</button>
                    </form>
                </div>
                <div class="top-right links">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </nav>

        <!--NAVBAR-->

    </head>
    <body>
        {{--@if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif--}}
        
        @yield('content')
        
        <footer>
            <div align="center" id="footer">
                Copyright &copy; 2020
                Designed by KIBAR Production
            </div>
        </footer>

        <!-- Script -->
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/nouislider.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.zoom.min.js') }}"></script>
    </body>
</html>
