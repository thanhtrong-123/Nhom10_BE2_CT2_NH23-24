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
                <div class="form-group">
                    <form action="/searchorder" method="get">
                        <div class="input-group">
                            <input class="input-sm form-control" placeholder="Search" name="searchorder">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
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
                        <th>Tổng tiền đơn hàng</th>
                        <th>Tên đơn đặt hàng</th>
                        <th>Địa chỉ đặt hàng</th>
                        <th>Số điện thoại đặt hàng</th>
                        <th>Tổng số sản phẩm</th>
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
                        <td>{{ $order->customer->customer_name }}</td>

                        <td>{{ number_format($order->payment_id) }}</td>
                        <td>{{ $order->order_name }}</td>
                        <td>{{ $order->order_address }}</td>
                        <td>{{ $order->order_phone }}</td>
                        <td>{{ $order->order_total }}</td>

                        <td><span class="text-ellipsis">
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

                        <td>
                        <td>
                            <a href="{{ URL::to('orderdetails/' . $order->order_id) }}">
                                Chi tiết
                            </a>
                        </td>
                        <td>
                            <div class="edit"
                                style="border: 1px solid #000;  text-align: center; border-radius: 2px; margin-bottom:5px">
                                <a style="pading: 10px;" href="{{ URL::to('order/' . $order->order_id . '/edit') }}"
                                    class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
                            </div>
                            <form action="{{ URL::to('order/' . $order->order_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="active styling-edit"
                                    onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này không?')"><i
                                        class="fa fa-times text-danger text"></i></button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <nav aria-label="Page navigation">
                    <div class="paginationWrap">
                        {{ $data->links('template_pagination') }}
                    </div>
                </nav>
            </div>
        </footer>
    </div>
</div>
@endsection