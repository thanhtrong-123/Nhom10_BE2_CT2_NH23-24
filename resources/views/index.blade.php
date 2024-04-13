@extends('layout')
@section('content')
    <div class="intro-section bg-lighter pt-5 pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                        <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside"
                            data-toggle="owl"
                            data-owl-options='{
                                        "nav": false, 
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>

                            @foreach ($sliders as $slider)
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            {{-- <source media="(max-width: 480px)" srcset="assets/images/slider/slide-1-480w.jpg"> --}}
                                            <img src="{{ asset('storage\images\banners\/') . $slider->slider_image }}"
                                                alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    
                                </div><!-- End .intro-slide -->
                            @endforeach

                        </div><!-- End .intro-slider owl-carousel owl-simple -->

                        <span class="slider-loader"></span><!-- End .slider-loader -->
                    </div><!-- End .intro-slider-container -->
                </div><!-- End .col-lg-8 -->
                <div class="col-lg-4">
                    <div class="intro-banners">
                        <div class="row row-sm">
                            <div class="col-md-6 col-lg-12">
                                <div class="banner banner-display">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-7/banners/banner-2.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-darkwhite"><a href="#">Limited time only.</a>
                                        </h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Trainers & Sportwear<br>Sale
                                                Up to 70% off</a></h3><!-- End .banner-title -->
                                        <a href="#" class="btn btn-outline-white banner-link">Shop Now<i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-6 col-lg-12 -->

                            <div class="col-md-6 col-lg-12">
                                <div class="banner banner-display mb-0">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-7/banners/banner-1.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-darkwhite"><a href="#">This week we
                                                love...</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Womens <br>Holiday Clothes</a>
                                        </h3><!-- End .banner-title -->
                                        <a href="#" class="btn btn-outline-white banner-link">Discover Now<i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-6 col-lg-12 -->
                        </div><!-- End .row row-sm -->
                    </div><!-- End .intro-banners -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="owl-carousel owl-simple" data-toggle="owl"
                data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                @foreach ($brands as $brand)
                    <a href="#" class="brand">
                        <img src="{{ asset('storage/images/brands/' . $brand->brand_image) }}" alt="Brand Name">
                    </a>
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .bg-lighter -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <div class="heading heading-center mb-3">
            <h2 class="title-lg">Categories Product</h2><!-- End .title -->

            <ul class="nav nav-pills justify-content-center" role="tablist">
                @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link {{ $categories[0]->category_id == $category->category_id ? 'active' : '' }}"
                            id="trendy-{{ $category->category_id }}-link" data-toggle="tab"
                            href="#trendy-{{ $category->category_id }}-tab" role="tab"
                            aria-controls="trendy-{{ $category->category_id }}-tab"
                            aria-selected="true">{{ $category->category_name }}</a>
                    </li>
                @endforeach
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            @foreach ($categories as $category)
                <div class="tab-pane p-0 fade show {{ $categories[0]->category_id == $category->category_id ? 'active' : '' }}"
                    id="trendy-{{ $category->category_id }}-tab" role="tabpanel"
                    aria-labelledby="trendy-{{ $category->category_id }}-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        @foreach ($products as $product)
                            @if ($product->category_id == $category->category_id)
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="{{ URL::to('product/' . $product->product_id) }}">
                                            <img style="width: 100%;" src="{{ asset('storage/images/products/' . $product->product_image) }}"
                                                alt="Product image" class="product-image" >

                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="{{ URL::to('wishlist') }}"
                                                class="btn-product-icon btn-wishlist"><span>add to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a
                                                href="{{ URL::to('product/' . $product->product_id) }}">{{ $product->product_name }}</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            {{ number_format($product->product_price) }} VND
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="{{ URL::to('cart') }}" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            @endif
                        @endforeach

                    </div><!-- End .tab-content -->
                </div><!-- End .container -->
            @endforeach
        </div>

        <div class="mb-5"></div><!-- End .mb-6 -->

        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rotate-left"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="icon-box icon-box-card text-center">
                        <span class="icon-box-icon">
                            <i class="icon-life-ring"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->

            <div class="mb-2"></div><!-- End .mb-2 -->
        </div><!-- End .container -->

        <div class="cta cta-display bg-image pt-4 pb-4"
            style="background-image: url('{{ asset('assets/images/backgrounds/cta/bg-6.jpg') }}');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">Molla presents the best in interior design</p>
                                <!-- End .cta-desc -->
                            </div><!-- End .col -->

                            <div class="col-auto">
                                <a href="{{ route('login') }}" class="btn btn-outline-white"><span>SIGN UP</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .col-auto -->
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    @endsection
