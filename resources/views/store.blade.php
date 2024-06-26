@extends('layout')
@section('content')
    <div class="page-header text-center" style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">Molla<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('store') }}">Shop</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">


                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                <div class="col-6 col-md-4 col-lg-4">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="{{ url('product/' . $product->product_id) }}">
                                                <img src="{{ asset('storage/images/products/' . $product->product_image) }}"
                                                    alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="{{ url('add-wishlist/' . $product->product_id) }}"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                        to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                            <form action="{{ route('cart.add') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                                <input type="hidden" name="qty" value="1">
                                                <div class="product-action">
                                                    <button class="btn-product btn-cart" type="submit"><span>add to
                                                            cart</span></button>
                                                </div><!-- End .product-action -->
                                            </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">{{ $product->category->category_name }}</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a
                                                    href="{{ url('product/' . $product->product_id) }}">{{ $product->product_name }}</a>
                                            </h3><!-- End .product-title -->
                                            <div class="product-price">
                                                {{ number_format($product->product_price) }} VND
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                </div><!-- End .col-sm-6 col-lg-4 -->
                            @endforeach
                        </div><!-- End .row -->
                    </div><!-- End .products -->

                    <nav aria-label="Page navigation">
                        <div class="paginationWrap">
                            {{ $products->links('template_pagination') }}
                        </div>
                    </nav>
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                    aria-controls="widget-1">
                                    Category
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        @foreach ($categories as $category)
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <!-- <input type="checkbox" class="custom-control-input"
                                                        id="cat-{{ $category->category_id }}">
                                                    <label class="custom-control-label"
                                                        for="cat-{{ $category->category_id }}">{{ $category->category_name }}</label> -->
                                                        <a href="{{ url('filterCategory/' . $category->category_id ) }}">{{ $category->category_name }}</a>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">{{ $category->total_product }}</span>
                                            </div><!-- End .filter-item -->
                                        @endforeach

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true"
                                    aria-controls="widget-4">
                                    Brand
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show"  id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items" >
                                        @foreach ($brands as $brand)
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <!-- <input type="checkbox" class="custom-control-input"
                                                        id="brand-{{ $brand->brand_id }}">
                                                    <label class="custom-control-label"
                                                        for="brand-{{ $brand->brand_id }}">{{ $brand->brand_name }}</label> -->
                                                    <a href="{{ url('fliterBrand/' . $brand->brand_id ) }}">{{ $brand->brand_name }}</a>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        @endforeach
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection
       

