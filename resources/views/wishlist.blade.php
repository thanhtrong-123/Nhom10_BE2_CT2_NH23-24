@extends('layout')
@section('content')
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Wishlist<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('store') }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <table class="table table-wishlist table-mobile">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($wishlist->list() as $key => $item)
                        <tr>
                            <td class="product-col">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="{{ url('product/' . $key) }}">
                                            <img src="{{ asset('storage/images/products/' . $item['product_image']) }}"
                                                alt="Product image">
                                        </a>
                                    </figure>

                                    <h3 class="product-title">
                                        <a href="{{ url('product/' . $key) }}">{{ $item['product_name'] }}</a>
                                    </h3><!-- End .product-title -->
                                </div><!-- End .product -->
                            </td>
                            <td class="price-col">{{ number_format($item['product_price']) }} VND</td>
                            <td class="stock-col"><span class="in-stock">In stock</span></td>
                            <td class="action-col">
                                <div class="dropdown">
                                    <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-list-alt"></i>Select Options
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">First option</a>
                                        <a class="dropdown-item" href="#">Another option</a>
                                        <a class="dropdown-item" href="#">The best option</a>
                                    </div>
                                </div>
                            </td>
                            <form action="{{ route('wishlist.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $key }}">
                                <td class="remove-col"><button class="btn-remove" type="submit"><i
                                            class="icon-close"></i></button></td>
                            </form>
                        </tr>
                    @endforeach

                </tbody>
            </table><!-- End .table table-wishlist -->
            <div class="wishlist-share">
                <div class="social-icons social-icons-sm mb-2">
                    <label class="social-label">Share on:</label>
                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                            class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                            class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                            class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
                <div class="cart-bottom">
                    <a href="{{ route('wishlist.deleteall') }}" class="btn btn-outline-dark-2"><span>CLEAR ALL</span><i
                            class="icon-refresh"></i></a>
                </div>
            </div><!-- End .wishlist-share -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection
