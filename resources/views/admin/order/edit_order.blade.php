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
                    <form role="form" action="{{ URL::to('order/' . $data->order_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                                    <label for="exampleInputPassword1">Tên khách hàng</label>
                                      <select name="customer_order" class="form-control input-sm m-bot15">
                                        @foreach($customer_order as $key => $cus_order)
                                            @if($cus_order->customer_id==$data->customer_id)
                                            <option selected value="{{$cus_order->customer_id}}">{{$cus_order->customer_name}}</option>
                                            @else
                                            <option value="{{$cus_order->customer_id}}">{{$cus_order->customer_name}}</option>
                                            @endif
                                        @endforeach
                                            
                                    </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tổng tiền đơn hàng</label>
                            <input type="text" name="payment_id" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->payment_id}}" require readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đơn đặt hàng</label>
                            <input type="text" name="order_name" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->order_name}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ giao hàng</label>
                            <input type="text" name="order_address" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->order_address}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại đặt hàng</label>
                            <input type="text" name="order_phone" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->order_phone}}" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tổng số sản phẩm</label>
                            <input type="text" name="order_total" class="form-control" onkeyup="ChangeToSlug();" id="slug" value="{{$data->order_total}}" require readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tình trạng đơn hàng</label>
                            <select name="order_status" class="form-control input-sm m-bot15">
                                <option value="0" {{ ($data->order_status == 0) ? "selected" : "" }}>Chưa giao hàng</option>
                                <option value="1" {{ ($data->order_status == 1) ? "selected" : "" }}>Đang giao hàng</option>
                                <option value="2" {{ ($data->order_status == 2) ? "selected" : "" }}>Đã giao hàng</option>

                            </select>
                        </div>
                        <button type="submit" name="add_order" class="btn btn-info">Cập nhật đơn hàng</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    @endsection