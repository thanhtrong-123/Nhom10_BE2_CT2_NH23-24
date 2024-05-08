@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết đơn hàng
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
            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{ url('add-orderdetails') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="order_id" value="{{ $order_id }}">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chọn sản phẩm:</label>
                            <select name="product_id" class="form-control input-sm m-bot15">
                                @foreach ($products as $product)
                                    <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng:</label>
                            <input type="number" name="product_qty" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập số lượng..." min="1" step="1" data-decimals="0" required>
                        </div>

                        <button type="submit" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
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
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_details as $order_detail)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $order_detail->product_name }}</td>
                                <td>{{ number_format($order_detail->product_price) }}</td>
                                <form action="{{ url('update-orderdetails') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_details_id"
                                        value="{{ $order_detail->order_details_id }}">
                                    <td><input type="number" name="qty"
                                            value="{{ $order_detail->product_sales_quantily }}" min="1"
                                            step="1" data-decimals="0" required></td>
                                    <td>
                                        <button type="submit" class="active styling-edit"><i
                                                class="fa fa-pencil-square-o text-success text-active"></i></button>
                                </form>
                                <form action="{{ url('delete-orderdetails') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="order_details_id"
                                        value="{{ $order_detail->order_details_id }}">
                                    <input type="hidden" name="order_id" value="{{ $order_id }}">
                                    <button type="submit" class="active styling-edit"
                                        onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"><i
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

                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">

                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
