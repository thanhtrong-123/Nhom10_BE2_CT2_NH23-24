@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm đơn đặt hàng
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{ URL::to('order') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên khách hàng</label>
                            <select name="customer_order" class="form-control input-sm m-bot15">
                                @foreach($customer_order as $key => $customer_order)
                                <option value="{{$customer_order->customer_id}}">{{$customer_order->customer_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tổng tiền đơn hàng</label>
                            <input type="text" data-validation="number" data-validation-error-msg="xin vui lòng nhập chính xác..." name="payment_id" class="form-control" id="" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đơn đặt hàng</label>
                            <input type="text" name="order_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ đặt hàng</label>
                            <input type="text" name="order_address" class="form-control" onkeyup="ChangeToSlug();" id="slug" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại đặt hàng</label>
                            <input type="text" data-validation="number" data-validation-error-msg="xin vui lòng nhập chính xác..." name="order_phone" class="form-control" id="" placeholder="Tên danh mục">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tổng đơn đặt hàng</label>
                            <input type="text" name="order_total" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="order_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>

                            </select>
                        </div>

                        <button type="submit" name="add_slider" class="btn btn-info">Thêm Đơn hàng</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
    @endsection