<!DOCTYPE html>
<html lang="en">


<!-- molla/index-3.html  22 Nov 2019 09:55:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" type="text/css" href="{{ asset('icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-3.css">
    <link rel="stylesheet" href="assets/css/demos/demo-3.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-3">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">VN</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ route('index') }}" class="logo">
                            <img src="assets/images/demos/demo-3/logo.png" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static"
                                title="Compare Products" aria-label="Compare Products">
                                <div class="icon">
                                    <i class="icon-random"></i>
                                </div>
                                <p>Compare</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a>
                                        </h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a>
                                        </h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="{{ route('wishlist') }}" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge">3</span>
                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{ route('cart') }}" class="btn btn-primary">View Cart</a>
                                    <a href="{{ route('checkout') }}"
                                        class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static"
                                title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li class="item-lead"><a href="#">Daily offers</a></li>
                                        <li class="item-lead"><a href="#">Gift Ideas</a></li>
                                        <li><a href="#">Beds</a></li>
                                        <li><a href="#">Lighting</a></li>
                                        <li><a href="#">Sofas & Sleeper sofas</a></li>
                                        <li><a href="#">Storage</a></li>
                                        <li><a href="#">Armchairs & Chaises</a></li>
                                        <li><a href="#">Decoration </a></li>
                                        <li><a href="#">Kitchen Cabinets</a></li>
                                        <li><a href="#">Coffee & Tables</a></li>
                                        <li><a href="#">Outdoor Furniture </a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ route('index') }}" class="sf-with-ul">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('category') }}" class="sf-with-ul">Shop</a>
                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{ route('category') }}">Shop </a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop Pages</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                                                <li><a href="{{ route('dashboard_user') }}">My Account</a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last
                                                                <br>Chance<br><span><strong>Sale</strong></span></div>
                                                            <!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="{{ route('product') }}" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="{{ route('product') }}">Products</a></li>

                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New
                                                                Trends<br><span><strong>spring 2019</strong></span>
                                                            </div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('about') }}" class="sf-with-ul">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}" class="sf-with-ul">Contact</a>
                                        </li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                                        <li><a href="{{ route('error404') }}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">Blog</a>
                                </li>
                                <li>
                                    <a href="elements-list.html" class="sf-with-ul">Elements</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                        <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-section pt-3 pb-3 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                                <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside"
                                    data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "responsive": {
                                            "768": {
                                                "nav": true,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="assets/images/demos/demo-3/slider/slide-1-480w.jpg">
                                                <img src="assets/images/demos/demo-3/slider/slide-1.jpg"
                                                    alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle text-primary">Daily Deals</h3>
                                            <!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">
                                                AirPods <br>Earphones
                                            </h1><!-- End .intro-title -->

                                            <div class="intro-price">
                                                <sup>Today:</sup>
                                                <span class="text-primary">
                                                    $247<sup>.99</sup>
                                                </span>
                                            </div><!-- End .intro-price -->

                                            <a href="{{ route('category') }}" class="btn btn-primary btn-round">
                                                <span>Click Here</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="assets/images/demos/demo-3/slider/slide-2-480w.jpg">
                                                <img src="assets/images/demos/demo-3/slider/slide-2.jpg"
                                                    alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle text-primary">Deals and Promotions</h3>
                                            <!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">
                                                Echo Dot <br>3rd Gen
                                            </h1><!-- End .intro-title -->

                                            <div class="intro-price">
                                                <sup class="intro-old-price">$49,99</sup>
                                                <span class="text-primary">
                                                    $29<sup>.99</sup>
                                                </span>
                                            </div><!-- End .intro-price -->

                                            <a href="{{ route('category') }}" class="btn btn-primary btn-round">
                                                <span>Click Here</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->
                                </div><!-- End .intro-slider owl-carousel owl-simple -->

                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->

                        <div class="col-lg-4">
                            <div class="intro-banners">
                                <div class="banner mb-lg-1 mb-xl-2">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-3/banners/banner-1.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Top Product</a>
                                        </h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3>
                                        <!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now<i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->

                                <div class="banner mb-lg-1 mb-xl-2">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-3/banners/banner-2.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Clearance</a></h4>
                                        <!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save
                                                    $70</span></a></h3><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now<i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->

                                <div class="banner mb-0">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-3/banners/banner-3.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Featured</a></h4>
                                        <!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest
                                                    Deals</span></a></h3><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now<i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .intro-banners -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .intro-section -->

            <div class="container featured">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab"
                            href="#products-featured-tab" role="tab" aria-controls="products-featured-tab"
                            aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab"
                            role="tab" aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab"
                            aria-controls="products-top-tab" aria-selected="false">Top Rated</a>
                    </li>
                </ul>

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
                        aria-labelledby="products-featured-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-1.jpg" alt="Product image"
                                            class="product-image">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof
                                            Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-2.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-3/products/product-2-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - Apple Watch Series 3 with
                                            White Sport Band</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $214.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-3.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="out-price">$339.99</span>
                                        <span class="out-text">Out of Stock</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-4.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Digital Cameras</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Sony - Alpha a5100 Mirrorless
                                            Camera</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 70%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-1.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof
                                            Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel"
                        aria-labelledby="products-sale-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-4.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Digital Cameras</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Sony - Alpha a5100 Mirrorless
                                            Camera</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 70%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-1.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof
                                            Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-3.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="out-price">$339.99</span>
                                        <span class="out-text">Out of Stock</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-2.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-3/products/product-2-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - Apple Watch Series 3 with
                                            White Sport Band</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $214.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel"
                        aria-labelledby="products-top-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-3.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="out-price">$339.99</span>
                                        <span class="out-text">Out of Stock</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 3 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-1.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof
                                            Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-4.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Digital Cameras</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Sony - Alpha a5100 Mirrorless
                                            Camera</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 70%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-2.jpg" alt="Product image"
                                            class="product-image">
                                        <img src="assets/images/demos/demo-3/products/product-2-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - Apple Watch Series 3 with
                                            White Sport Band</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $214.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="{{ route('product') }}">
                                        <img src="assets/images/demos/demo-3/products/product-1.jpg" alt="Product image"
                                            class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof
                                            Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-7 mb-lg-11"></div><!-- End .mb-7 -->

            

            

            <div class="container">
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" data-owl-options='{
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
                    <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="container top">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Top Selling Products</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab"
                                    role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="top-tv-link" data-toggle="tab" href="#top-tv-tab" role="tab"
                                    aria-controls="top-tv-tab" aria-selected="false">TV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="top-computers-link" data-toggle="tab" href="#top-computers-tab"
                                    role="tab" aria-controls="top-computers-tab" aria-selected="false">Computers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="top-phones-link" data-toggle="tab" href="#top-phones-tab"
                                    role="tab" aria-controls="top-phones-tab" aria-selected="false">Tablets & Cell
                                    Phones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="top-watches-link" data-toggle="tab" href="#top-watches-tab"
                                    role="tab" aria-controls="top-watches-tab" aria-selected="false">Smartwatches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="top-acc-link" data-toggle="tab" href="#top-acc-tab" role="tab"
                                    aria-controls="top-acc-tab" aria-selected="false">Accessories</a>
                            </li>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel"
                        aria-labelledby="top-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-14.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-15.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                            Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-tv-tab" role="tabpanel" aria-labelledby="top-tv-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-14.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-15.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                            Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-computers-tab" role="tabpanel"
                        aria-labelledby="top-computers-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-15.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                            Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-14.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-phones-tab" role="tabpanel"
                        aria-labelledby="top-phones-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-15.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                            Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-14.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-watches-tab" role="tabpanel"
                        aria-labelledby="top-watches-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-14.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #edd2c8;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-acc-tab" role="tabpanel" aria-labelledby="top-acc-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
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
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-15.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                            Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-11.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                    </h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-12.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                            Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-3/products/product-13.jpg"
                                            alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi
                                            256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span
                                                class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="container">
                <hr class="mt-5 mb-0">
            </div><!-- End .container -->

            <div class="icon-boxes-container mt-2 mb-2 bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>when you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

            <div class="container">
                <div class="cta cta-separator cta-border-image cta-half mb-0"
                    style="background-image: url(assets/images/demos/demo-3/bg-2.jpg);">
                    <div class="cta-border-wrapper bg-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cta-wrapper cta-text text-center">
                                    <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                    <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam
                                        porttitor mauris sit amet orci. </p><!-- End .cta-desc -->

                                    <div class="social-icons social-icons-colored justify-content-center">
                                        <a href="#" class="social-icon social-facebook" title="Facebook"
                                            target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon social-twitter" title="Twitter"
                                            target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon social-instagram" title="Instagram"
                                            target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon social-youtube" title="Youtube"
                                            target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="#" class="social-icon social-pinterest" title="Pinterest"
                                            target="_blank"><i class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <div class="cta-wrapper text-center">
                                    <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                    <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for
                                        first shopping</p><!-- End .cta-desc -->

                                    <form action="#">
                                        <div class="input-group">
                                            <input type="email" class="form-control"
                                                placeholder="Enter your Email Address" aria-label="Email Adress"
                                                required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-rounded" type="submit"><i
                                                        class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- .End .input-group -->
                                    </form>
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .bg-white -->
                </div><!-- End .cta -->
            </div><!-- End .container -->
        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="assets/images/demos/demo-3/logo-footer.png" class="footer-logo"
                                    alt="Footer Logo" width="105" height="25">
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                                    magna eros eu erat. </p>

                                <div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Got Question? Call us 24/7
                                    <a href="tel:#">+0123 456 789</a>
                                </div><!-- End .widget-call -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Molla</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2024 Molla Store. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <figure class="footer-payments">
                        <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                        role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                        aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                    aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->

                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                        aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember
                                                    Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy"
                                                    required>
                                                <label class="custom-control-label" for="register-policy">I agree to the
                                                    <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-3.js"></script>
</body>


<!-- molla/index-3.html  22 Nov 2019 09:55:58 GMT -->

</html>