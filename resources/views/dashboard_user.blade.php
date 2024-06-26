@extends('layout')
@section('content')
<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">My Account<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('store') }}">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Account</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-lg-3">
                    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard"
                                role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab"
                                aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab"
                                aria-controls="tab-address" aria-selected="false">Adresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab"
                                aria-controls="tab-account" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/logoutuser') }}">Sign Out</a>
                        </li>
                    </ul>
                </aside><!-- End .col-lg-3 -->

                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        @if (Session::has('customer_name'))
                       <div class="tab-pane fade show active" id="tab-dashboard"
                            role="tabpanel" aria-labelledby="tab-dashboard-link">
                            <p style="font-size:18px;">Hello <span class="font-weight-normal text-dark"
                                    style="font-size:22px;">{{ Session::get('customer_name') }}</span> (not
                                <span style="font-size:22px;"
                                    class="font-weight-normal text-dark">{{ Session::get('customer_name') }}</span>?
                                <a href="{{ URL::to('/logoutuser') }}">Log out</a>)
                                <br>
                                From your account dashboard you can view your <a href="#tab-orders"
                                    class="tab-trigger-link link-underline">recent orders</a>, manage your <a
                                    href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>,
                                and
                                <a href="#tab-account" class="tab-trigger-link">edit your password and account
                                    details</a>.
                            </p>
                    </div><!-- .End .tab-pane -->
                    @else
                    @endif
                    <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Order name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <h3 class="product-title">
                                                {{ $order->order_name }}
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td>{{ $order->order_address }}</td>
                                    <td>{{ $order->order_phone }}</td>
                                    <td>{{ $order->order_total }}</td>
                                    <td class="price-col">{{ number_format($order->payment_id) }}</td>
                                    <td class="price-col"><span class="text-ellipsis">
                                            <?php
                                        if ($order->order_status == 0) {
                                                                                    ?>
                                            <p>Chưa giao hàng</a>
                                                <?php
                                        } else if ($order->order_status == 1) {
                                                                                        ?>
                                            <p>Đang giao hàng</p>
                                            <?php
                                            } else {
                                                                                    ?>
                                            <p>Đã giao hàng</p>
                                            <?php
                                            }
                                                                                    ?>
                                        </span></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table><!-- End .table table-wishlist -->
                        <a href="{{ route('store') }}" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                        <p>The following addresses will be used on the checkout page by default.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-dashboard">
                                    <div class="card-body">
                                        <h3 class="card-title">Billing Address</h3><!-- End .card-title -->

                                        <p>User Name<br>
                                            User Company<br>
                                            John str<br>
                                            New York, NY 10001<br>
                                            1-234-987-6543<br>
                                            yourmail@mail.com<br>
                                            <a href="#">Edit <i class="icon-edit"></i></a>
                                        </p>
                                    </div><!-- End .card-body -->
                                </div><!-- End .card-dashboard -->
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <div class="card card-dashboard">
                                    <div class="card-body">
                                        <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

                                        <p>You have not set up this type of address yet.<br>
                                            <a href="#">Edit <i class="icon-edit"></i></a>
                                        </p>
                                    </div><!-- End .card-body -->
                                </div><!-- End .card-dashboard -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                       <form method="POST" action="{{ URL::to('changepw') }}">
                            @csrf
                            <input type="hidden" class="form-control" name="namepw"
                                value="{{ Session::get('customer_name') }}" required>
                            <input type="hidden" class="form-control" name="emailpw"
                                value="{{ Session::get('customer_email') }}" required>
                            <input type="hidden" class="form-control" name="phonepw"
                                value="{{ Session::get('customer_phone') }}" required>

                            <label>Current password</label>
                            <input type="password" class="form-control" name="current_password" required>
                            <label>New password</label>
                            <input type="password" class="form-control" name="new_password" required>

                            <label>Confirm new password</label>
                            <input type="password" class="form-control mb-2" name="new_password_confirmation" required>
                           
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                    </div><!-- .End .tab-pane -->

                </div>
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .dashboard -->
</div><!-- End .page-content -->
@endsection