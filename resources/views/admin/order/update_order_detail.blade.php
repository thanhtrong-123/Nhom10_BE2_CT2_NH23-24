@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật đơn hàng
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
                    <form role="form" action="{{ URL::to('order/' . $orderDetail->order_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" name="payment_id" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->customer_id}}" require readonly>
                        </div> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tổng tiền đơn hàng</label>
                            <input type="text" name="payment_id" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->payment_id}}" require readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đơn hàng</label>
                            <input type="text" name="order_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->order_name}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ giao hàng</label>
                            <input type="text" name="order_address" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->order_address}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại đặt hàng</label>
                            <input type="text" name="order_phone" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->order_phone}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                            <input type="text" name="order_total" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$orderDetail->order_total}}" require readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tình trạng đơn hàng</label>
                            <select name="order_status" class="form-control input-sm m-bot15">
                                <option value="0" {{ ($orderDetail->order_status == 0) ? "selected" : "" }}>Chưa giao hàng</option>
                                <option value="1" {{ ($orderDetail->order_status == 1) ? "selected" : "" }}>Đang giao hàng</option>
                                <option value="2" {{ ($orderDetail->order_status == 2) ? "selected" : "" }}>Đả giao hàng</option>

                            </select>
                        </div>

                        <button type="submit" name="add_order" class="btn btn-info">Cập nhật đơn hàng</button>
                    </form>

                </div>

            </div>
        </section>

    </div>
    @endsection