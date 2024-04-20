@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê đơn hàng
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên khách hàng</th>
                        <th>Giá trị đơn hàng</th>
                        <th>Tên người đặt hàng</th>
                        <th>Địa chỉ người đặt hàng</th>
                        <th>Số điện thoại đặt hàng</th>
                        <th>Số lượng đơn hàng</th>
                        <th>Thương hiệu</th>
                        <th>Tình trạng đơn hàng</th>
                        <th style="width:30px;"></th>
                        <th style="width:100px;">Chi tiết đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $order)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                        </td>
                        <td>{{ $order->customer_order }}</td>
                        <td>{{ $order->payment_id }}</td>
                        <td>{{ $order->order_name }}</td>
                        <td>{{ $order->order_address }}</td>
                        <td>{{ $order->order_phone }}</td>
                        <td>{{ $order->order_total }}</td>
                        <td>{{ $order->order_status }}</td>

                        <td><span class="text-ellipsis">
                                <?php
                                if ($order->order_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-order/'.$order->order_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-order/'.$order->order_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                <?php
                                }
                                ?>
                            </span></td>

                        <td>

                        <td>
                            <a href="{{ URL::to('order/' . $order->order_id . '/edit') }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>

                            <form action="{{ URL::to('order/' . $order->order_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="active styling-edit" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"><i class="fa fa-times text-danger text"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ URL::to('order/' . $order->order_id . '/') }}" >
                            Chi tiết
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 20-30 của 50 mục</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">

                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection