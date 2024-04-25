@extends('admin_layout')

@section('admin_content')
<div class="panel panel-default">
    <div class="panel-heading">
        Chi tiết đơn hàng #{{ $order->order_id }}
    </div>
    <div class="panel-body">
        <p><strong>Tên khách hàng:</strong> {{ $order->customer->customer_name }}</p>
        <p><strong>Giá trị đơn hàng:</strong> {{ $order->order_total }}</p>
        <p><strong>Tên người đặt hàng:</strong> {{ $order->order_name }}</p>
        <p><strong>Địa chỉ người đặt hàng:</strong> {{ $order->order_address }}</p>
        <p><strong>Số điện thoại người đặt hàng:</strong> {{ $order->order_phone }}</p>
        <p><strong>Tình trạng đơn hàng:</strong>
            @if ($order->order_status == 0)
                Chưa giao hàng
            @elseif ($order->order_status == 1)
                Đang giao hàng
            @else
                Đã giao hàng
            @endif
        </p>
        <!-- Add more details here as needed -->
    </div>
    

    

</div>
@endsection
