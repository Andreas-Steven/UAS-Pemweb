@extends('Index-Home')

@section('title', 'KIBAR')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                KIBAR
                <h2>One Stop Shopping Service</h2>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/geforce-rtx-turing/social/geforce-rtx-20-series-social-2048x1024.jpg" alt="First slide" width="1000" height="400">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://rog.asus.com/media/1585821021649.jpg" alt="Second slide" width="1000" height="400">
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

    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title2">New Products</h2>
            <div class="section-nav">
            </div>
        </div>
    </div>

    <!-- Products tab & slick -->
    <div class="col-md-12">
        <div class="row">
            <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                    <div class="slick-slider" data-nav="#slick-nav-1">
                        {{-- MASUKIN FOREACH DARI DATABASE --}}
                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Notebook</p>
                                <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                <h4 class="product-price">RP 15.999.000 <del class="product-old-price">RP 16.999.000</del></h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Notebook</p>
                                <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Notebook</p>
                                <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="https://www.itgaleri.com/wp-content/uploads/2019/07/Asus-ROG-Strix-G531GD-2.jpg" alt="" width="300" height="300">
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category">Notebook</p>
                                <h3 class="product-name"><a href="#">ASUS ROG Strix G531GT-I765G1T</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                        <!-- /product -->
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
            </div>
        </div>
    </div>
    <!-- Products tab & slick -->

    {{--<div class="col-md-4 col-xs-6">
        <div class="section-title">
            <h4 class="title2">Top selling</h4>
            <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
            </div>
        </div>

        <div class="products-widget-slick" data-nav="#slick-nav-4">
            <div>
                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product04.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product05.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product06.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- product widget -->
            </div>

            <div>
                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product07.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product08.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                    <div class="product-img">
                        <img src="./img/product09.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                </div>
                <!-- product widget -->
            </div>
        </div>
    </div>--}}
@stop