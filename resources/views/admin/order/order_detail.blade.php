@extends('admin_layout')

@section('admin_content')
<div class="panel panel-default">
    <div class="panel-heading">
        Chi tiết đơn hàng 
    </div>
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
                        <th>Giá trị sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                        </td>
                        

                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->product_price }}</td>
                        <td>{{ $order->product_sales_quantily }}</td>

                        <td>
                            <div class="edit" style="border: 1px solid #000;  text-align: center; border-radius: 2px; margin-bottom:5px">
                                <a style="pading: 10px;" href="{{ URL::to('order/' . $order->order_id . '/edit') }}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
                            </div>
                            <form action="{{ URL::to('order/' . $order->order_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="active styling-edit" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"><i class="fa fa-times text-danger text"></i></button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>   
            <div class="container"> 
            <form role="form" action="{{ URL::to('add_order_detail/') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sản phẩm</label>
                            <select name="order_status" class="form-control input-sm m-bot15">
                                @foreach ($products as $product)
                                <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                            <input type="number" name="order_total" class="form-control" onkeyup="ChangeToSlug();" id="slug" require>
                        </div>
                        

                        <button type="submit" name="add_order" class="btn btn-info">Thêm sản phẩm vào đơn hàng</button>
                    </form>
                    </div>
</div>
@endsection
