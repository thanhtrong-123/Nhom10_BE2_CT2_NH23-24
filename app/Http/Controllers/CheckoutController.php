<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class CheckoutController extends Controller
{
    //
    
    public function add_checkout(Request $request)
    {
        //$this->AuthLogin();
        $data = new Order;
        $data2 = new OrderDetail;
        $data->order_id = $request->order_id;
        $data->customer_id = $request->customer_id;
        $data->payment_id = $request->cart;
        $data->order_name = $request->order_name;
        $data->order_address = $request->order_address;
        $data->order_phone = $request->order_phone;
        $data->order_total = $request->has('order_total') ? $request->order_total : 0;
        $data->order_status = $request->has('order_status') ? $request->order_status : 0;
        $data->save();
        
        $order_id = $data->getKey();
        $data2->order_details_id = $request->order_details_id;
        $data2->order_id = $order_id;
        $data2->product_id = $request->product_id_checkout;
        $data2->product_name = $request->product_name_checkout;
        $data2->product_price = $request->product_price_checkout;
        $data2->product_sales_quantily = $request->product_quantity_checkout;
        $data2->save();
        Session::put('message', 'Thanh toán đơn hàng thành công');
        return Redirect::to('checkout');
    }
}