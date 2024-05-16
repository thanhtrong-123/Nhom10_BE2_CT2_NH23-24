@extends('layout')
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Extended Description</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery">
                            <figure class="product-main-image">
                                <img id="product-zoom"
                                    src="{{ asset('storage/images/products/' . $product->product_image) }}"
                                    alt="product image">
                            </figure><!-- End .product-main-image -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{ $product->product_name }}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                            </div><!-- End .rating-container -->

                            <div class="product-price">
                                {{ number_format($product->product_price) }} VND
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>{{ $product->product_content }}</p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label>Color:</label>

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #eab656;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #3a588b;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #caab97;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size">
                                <label for="size">Size:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control">
                                        <option value="#" selected="selected">Select a size</option>
                                        <option value="s">Small</option>
                                        <option value="m">Medium</option>
                                        <option value="l">Large</option>
                                        <option value="xl">Extra Large</option>
                                    </select>
                                </div><!-- End .select-custom -->

                                <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                            </div><!-- End .details-filter-row -->
                            <form action="{{ route('cart.add') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <div class="details-filter-row details-row-size">
                                    <label for="qty">Qty:</label>
                                    <div class="product-details-quantity">
                                        <input type="number" id="qty" name="qty" class="form-control"
                                            value="1" min="1" max="10" step="1" data-decimals="0"
                                            required>
                                    </div><!-- End .product-details-quantity -->
                                </div><!-- End .details-filter-row -->

                                <div class="product-details-action">
                                    <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>

                                    <div class="details-action-wrapper">
                                        <a href="{{ url('add-wishlist/' . $product->product_id) }}"
                                            class="btn-product btn-wishlist" title="Wishlist"><span>Add to
                                                Wishlist</span></a>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->
                            </form>
                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Category: {{ $product->category->category_name }}</span>
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                            class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->
        </div><!-- End .container -->

        <div class="product-details-tab product-details-extended">
            <div class="container">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                            role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                            role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                            role="tab" aria-controls="product-info-tab" aria-selected="false">Additional
                            information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab"
                            role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping &
                            Returns</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            <div class="tab-content">
                <div class="tab-pane fade" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                    <div class="product-desc-content">
                        <div class="container">
                            <h3>Description</h3>
                            <p>{{ $product->product_desc }}</p>

                        </div><!-- End .container -->

                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                    <div class="product-desc-content">
                        <div class="container">
                            <h3>Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris
                                sit amet orci. </p>

                            <h3>Fabric & care</h3>
                            <ul>
                                <li>Faux suede fabric</li>
                                <li>Gold tone metal hoop handles.</li>
                                <li>RI branding</li>
                                <li>Snake print trim interior </li>
                                <li>Adjustable cross body strap</li>
                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                            </ul>

                            <h3>Size</h3>
                            <p>one size</p>
                        </div><!-- End .container -->
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                    aria-labelledby="product-shipping-link">
                    <div class="product-desc-content">
                        <div class="container">
                            <h3>Delivery & returns</h3>
                            <p>We deliver to over 100 countries around the world. For full details of the delivery options
                                we offer, please view our <a href="#">Delivery information</a><br>
                                We hope you’ll love every purchase, but if you ever need to return an item you can do so
                                within a month of receipt. For full details of how to make a return, please view our <a
                                    href="#">Returns information</a></p>
                        </div><!-- End .container -->
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade show active" id="product-review-tab" role="tabpanel"
                    aria-labelledby="product-review-link">
                    <div class="reviews">
                        <div class="container">
                            <h3>Reviews</h3>
                            @foreach ($reviews as $review)
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">{{ $review->customer->customer_name }}</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val"
                                                        style="width: {{ $review->review_rating * 20 }}%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">{{ $review->created_at }}</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>{{ $review->review_title }}</h4>

                                            <div class="review-content">
                                                <p>{{ $review->review_comment }}</p>
                                            </div><!-- End .review-content -->
                                            @if ($review->customer_id == Session::get('customer_id'))
                                                <div class="review-action">
                                                    <a href="{{ url('edit-review/' . $review->review_id) }}"><i
                                                            class="fa fa-pencil-square-o"></i>Update</a>
                                                    <a href="{{ url('delete-review/' . $review->review_id) }}"
                                                        onclick="return confirm('Bạn có chắc là muốn xóa bình luận này không?')"><i
                                                            class="fa fa-times"></i>Delete</a>
                                                </div><!-- End .review-action -->
                                            @endif
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            @endforeach
                            @if (Session::get('customer_id') != null)
                                @if (Session::get('review_id') != null)
                                    <form action="{{ url('update-review') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="review_id" value="{{ Session::get('review_id') }}">
                                        <div class="review">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <h4>Rating</h4>
                                                    <input type="radio" id="rating1" name="rating" value="1"
                                                        {{ Session::get('review_rating') == 1 ? 'checked' : '' }}>
                                                    <label for="rating1">1<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating2" name="rating" value="2"
                                                        {{ Session::get('review_rating') == 2 ? 'checked' : '' }}>
                                                    <label for="rating2">2<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating3" name="rating" value="3"
                                                        {{ Session::get('review_rating') == 3 ? 'checked' : '' }}>
                                                    <label for="rating3">3<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating4" name="rating" value="4"
                                                        {{ Session::get('review_rating') == 4 ? 'checked' : '' }}>
                                                    <label for="rating4">4<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating5" name="rating" value="5"
                                                        {{ Session::get('review_rating') == 5 ? 'checked' : '' }}>
                                                    <label for="rating5">5<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label>
                                                </div><!-- End .col -->
                                                <div class="col">
                                                    <h4>Comment</h4>

                                                    <div class="contact-form mb-3">
                                                        <label for="title" class="sr-only">Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title" placeholder="Title *" required
                                                            value="{{ Session::get('review_title') }}">

                                                        <label for="comment" class="sr-only">Comment</label>
                                                        <textarea class="form-control" cols="30" rows="4" id="comment" name="comment" required
                                                            placeholder="Comment *">{{ Session::get('review_comment') }}</textarea>

                                                        <button type="submit"
                                                            class="btn btn-outline-primary-2 btn-minwidth-sm">
                                                            <span>SUBMIT</span>
                                                            <i class="icon-long-arrow-right"></i>
                                                        </button>
                                                    </div><!-- End .contact-form -->
                                                </div><!-- End .col-auto -->
                                            </div><!-- End .row -->
                                        </div><!-- End .review -->
                                    </form>
                                @else
                                    <form action="{{ url('add-review') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="customer_id"
                                            value="{{ Session::get('customer_id') }}">
                                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                        <div class="review">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <h4>Rating</h4>
                                                    <input type="radio" id="rating1" name="rating" value="1">
                                                    <label for="rating1">1<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating2" name="rating" value="2">
                                                    <label for="rating2">2<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating3" name="rating" value="3">
                                                    <label for="rating3">3<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating4" name="rating" value="4">
                                                    <label for="rating4">4<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label><br>
                                                    <input type="radio" id="rating5" name="rating" value="5"
                                                        checked>
                                                    <label for="rating5">5<i class="icon-star-o"
                                                            style="color: #fcb941;"></i></label>
                                                </div><!-- End .col -->
                                                <div class="col">
                                                    <h4>Comment</h4>

                                                    <div class="contact-form mb-3">
                                                        <label for="title" class="sr-only">Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title" placeholder="Title *" required>

                                                        <label for="comment" class="sr-only">Comment</label>
                                                        <textarea class="form-control" cols="30" rows="4" id="comment" name="comment" required
                                                            placeholder="Comment *"></textarea>

                                                        <button type="submit"
                                                            class="btn btn-outline-primary-2 btn-minwidth-sm">
                                                            <span>SUBMIT</span>
                                                            <i class="icon-long-arrow-right"></i>
                                                        </button>
                                                    </div><!-- End .contact-form -->
                                                </div><!-- End .col-auto -->
                                            </div><!-- End .row -->
                                        </div><!-- End .review -->
                                    </form>
                                @endif
                            @endif
                        </div><!-- End .container -->
                    </div><!-- End .reviews -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .product-details-tab -->

        <div class="container">
            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                @foreach ($same_products as $value)
                    <div class="product product-7">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="{{ URL::to('product/' . $value->product_id) }}">
                                <img src="{{ asset('storage/images/products/' . $value->product_image) }}"
                                    alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="{{ url('add-wishlist/' . $value->product_id) }}"
                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                            <form action="{{ route('cart.add') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $value->product_id }}">
                                <input type="hidden" name="qty" value="1">
                                <div class="product-action">
                                    <button class="btn-product btn-cart" type="submit"><span>add to cart</span></button>
                                </div><!-- End .product-action -->
                            </form>
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{ $value->category->category_name }}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a
                                    href="{{ URL::to('product/' . $value->product_id) }}">{{ $value->product_name }}</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                {{ number_format($value->product_price) }} VND
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection
