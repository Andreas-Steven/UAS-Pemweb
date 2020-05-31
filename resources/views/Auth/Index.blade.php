@extends('Index-Auth')

@section('title', 'KIBAR')

@section('content')
    <body class="text-center" style="background-color: #333;">
        <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto" >
                <div class="inner">
                <h3 class="masthead-brand top-left" style="color: #00cc99">KIBAR</h3>
                <nav class="nav nav-masthead justify-content-center top-right">
                    <a class="nav-link active" style="color: #00cc99" href="{{ url('/')}}">Home</a>
                    <a class="nav-link" style="color: #00cc99" href="{{ url('/Login') }}">Login</a>
                    <a class="nav-link" style="color: #00cc99" href="{{ url('/Register') }}">Register</a>
                </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <div class="title m-b-md">
                        <h1 style="color: #00cc99">One Stop Shopping Service</h1>
                </div>
            </main>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                {{--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>--}}
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/geforce-rtx-turing/social/geforce-rtx-20-series-social-2048x1024.jpg" alt="First slide" width="1000" height="400">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://rog.asus.com/media/1585821021649.jpg" alt="Second slide" width="1200" height="400">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://esfstream.com/wp-content/uploads/2018/03/Vamers-FYI-Gaming-Xbox-One-X-Microsofts-smallest-and-most-powerful-games-console-Main-Banner-01.jpg" alt="Third slide" width="1000" height="400">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>                 
        </div>
    </body>
@stop
