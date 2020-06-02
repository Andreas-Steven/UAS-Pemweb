@extends('Index-Home')

@section('title', 'KIBAR')

@section('content')
    {{--<div class="flex-center position-ref full-height">--}}
    <div class="container d-flex p-3 mx-auto flex-column" style="margin-bottom: 10px;">
        <div class="content">
            <div class="title m-b-md">
                KIBAR
                <h2>One Stop Shopping Service</h2>
            </div>
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
    </div>
    
    <!-- Products tab & slick -->
    <div class="col-md-12 border">  
        <div class="col-md-12 text-center" style="padding: 0px">
            <div class="section-title">
                <h2 class="title2">New Products</h2>
                <div class="section-nav">
                </div>
            </div>
        </div>
        <hr>
        <!-- product -->
        <div class="row" style="justify-content: center;">
        @foreach ($product as $Row)
            
            <div class='col-md-3 border border-dark' align="center" style="margin-right:10px; margin-bottom: 10px;">
                <div class='team-block bottom'>
                    <div class="product-img">
                        <img src="{{ url('FotoProduk/' . $Row->Image) }}" alt="" width="200" height="200">
                    </div>
                    <div class='team-content'>
                        <h3 class="product-name"><a href="/product/{{ $Row->ID }}">{{ $Row->Name }}</a></h3>
                        <h4 class="product-price">Rp @IDR($Row->Price)</h4>
                    </div>
                </div>
            </div>
            
        @endforeach
        </div>
        <!-- Search Products -->
        {{ $product->links() }}
        
        <!-- product -->
    </div>
@stop
