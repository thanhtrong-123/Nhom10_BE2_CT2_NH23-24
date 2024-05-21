@extends('layout')
@section('content')
<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Checkout<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
<div class="message-checkout text-center">
    <h3>
        <?php
	                        
	                        $message = Session::get('message');
	                        if($message){
		                        echo '<span class="text-alert" style="color:red;">'.$message.'</span>';
		                    Session::put('message',null);
	                        }
	                        ?></h3>
</div>
<div class="page-content">
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="checkout-discount">
                        @if(Session::get('cart'))
                        <form action="{{ URL::to('checkcoupon') }}" method="post">
                            {{ csrf_field() }}

                            <input type="text" class="form-control" required id="checkout-discount-input" name="coupon"
                                placeholder="Click here to enter your code">

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                Tính mã giảm giá
                            </button>
                            @if(Session::get('coupon'))
                            <a class="btn btn-outline-primary-2 btn-order btn-block" href="/del-coupon">
                                Xóa mã giảm giá
                            </a>
                            @endif
                        </form>
                        @endif
                    </div><!-- End .checkout-discount -->
                </div>
                <div class="col-9">

                    <form>
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputPassword1">Chọn thành phố</label>
                            <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                                <option value="">--Chọn tỉnh thành phố--</option>
                                @foreach($city as $key => $ci)
                                <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chọn quận huyện</label>
                            <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                <option value="">--Chọn quận huyện--</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chọn xã phường</label>
                            <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                <option value="">--Chọn xã phường--</option>
                            </select>
                        </div>


                        <input type="button" value="Tính phí vận chuyển" name="calculate_order"
                            class="btn btn-primary btn-sm calculate_delivery">
                    </form>
                </div>
            </div>



            <form action="{{ URL::to('add-checkout') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <?php
	                        use Illuminate\Support\Facades\Session;
	                        $message = Session::get('message');
	                        if($message){
		                        echo '<span class="text-alert" style="color:red;">'.$message.'</span>';
		                    Session::put('message',null);
	                        }
	                        ?>
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="checkout-title">Billing Details</h2>
                        @if (Session::has('customer_name'))
                        <label>Tên Khách Hàng: <span
                                style="margin: 10px; font-size: 20px;">{{ Session::get('customer_name') }}</span></label>

                        <input type="hidden" class="form-control" name="customer_id"
                            value="{{ Session::get('customer_id') }}">



                        @else
                        <li><a href="{{ route('login') }}"><i class="icon-user"></i> Login</a></li>
                        @endif
                        <br>
                        <label>Tên đơn dặt hàng</label>
                        <input type="text" class="form-control" name="order_name" required>
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="order_address"
                            placeholder="House number and Street name" required>
                        <label>Điện thoại</label>
                        <input type="tel" class="form-control" name="order_phone" required>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-4">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->list() as $key => $item)
                                    <tr>
                                        <input type="hidden" name="product_id_checkout"
                                            value="{{ $item['product_id'] }}">
                                        <td><a href="{{ url('product/' . $key) }}">{{ $item['product_name'] }}</a><input
                                                type="hidden" name="product_name_checkout"
                                                value="{{ $item['product_name'] }}"></td>
                                        <td class="text-center">{{$item['qty']}} <input type="hidden"
                                                name="product_quantity_checkout" value="{{$item['qty']}}"></td>
                                        <td class="text-center">
                                            {{ number_format($item['product_price'] * $item['qty']) }} <input
                                                type="hidden" name="product_price_checkout"
                                                value="{{ $item['product_price'] * $item['qty'] }}"></td>
                                    </tr>
                                    @endforeach
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td class="text-center">
                                            {{ number_format($cart->getTotalMoney()) }}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr>
                                        <td>Mã giảm giá:</td>
                                        <td class="text-center">
                                            @if(Session::get('coupon'))
                                            @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['coupon_condition']==1)
                                            {{$cou['coupon_code']}}

                                            <?php
                                                    $tongTienGiamGia = ($cart->getTotalMoney()*$cou['coupon_number'])/100;
                                                    $total_coupon = $cart->getTotalMoney() - $tongTienGiamGia;
                                                    ?>
                                            @elseif($cou['coupon_condition']==2)
                                            {{$cou['coupon_code']}}
                                            @php
                                            $total_coupon = $cart->getTotalMoney() - $cou['coupon_number'];
                                            @endphp
                                            @endif
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số tiền giảm:</td>
                                        <td class="text-center">
                                            @if(Session::get('coupon'))
                                            @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['coupon_condition']==1)
                                            {{number_format($tongTienGiamGia)}} vnđ
                                            @elseif($cou['coupon_condition']==2)
                                            {{number_format($cou['coupon_number'])}} vnđ
                                            @php
                                            $total_coupon = $cart->getTotalMoney() - $cou['coupon_number'];
                                            @endphp
                                            @endif
                                            @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shipping:</td>
                                        <td class="text-center">{{number_format(Session::get('fee'))}}</td>
                                        @php
                                        $fee = Session::get('fee');
                                        @endphp
                                    </tr>
                                    @if(Session::get('coupon'))
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td class="text-center" name="cart">{{number_format($total_coupon + $fee)}}
                                            <input type="hidden" name="cart" value="{{$total_coupon - $fee}}">
                                        </td>
                                    </tr><!-- End .summary-total -->
                                    @else
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td class="text-center" name="cart">{{$cart->getTotalMoney() - $fee}}
                                            <input type="hidden" name="cart" value="{{$cart->getTotalMoney() - $fee}}">
                                        </td>
                                    </tr><!-- End .summary-total -->
                                    @endif
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <!-- <div class="accordion-summary" id="accordion-payment">
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#collapse-1"
                                                aria-expanded="true" aria-controls="collapse-1">
                                                Direct bank transfer
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                                        data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Make your payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order will not be
                                            shipped until the funds have cleared in our account.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="heading-2">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">
                                                Check payments
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2"
                                        data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                            Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="heading-3">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">
                                                Cash on delivery
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3"
                                        data-parent="#accordion-payment">
                                        <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                            Quisque volutpat mattis eros.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="heading-4">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">
                                                PayPal <small class="float-right paypal-link">What is
                                                    PayPal?</small>
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4"
                                        data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
                                            non, semper suscipit, posuere a, pede. Donec nec justo eget
                                            felis facilisis fermentum.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="heading-5">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5"
                                                aria-expanded="false" aria-controls="collapse-5">
                                                Credit Card (Stripe)
                                                <img src="assets/images/payments-summary.png" alt="payments cards">
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5"
                                        data-parent="#accordion-payment">
                                        <div class="card-body"> Donec nec justo eget felis facilisis
                                            fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum
                                            dolor sit ame.
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                Đặt Hàng
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->
@endsection