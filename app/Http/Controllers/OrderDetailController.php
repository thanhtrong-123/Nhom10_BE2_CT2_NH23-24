<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class OrderDetailController extends Controller
{
    public function index($order_id) {
        $this->AuthLogin();

        $order_details = OrderDetail::where('order_id', $order_id)->get();
        $products = Product::where('product_status', 0)->get();
        return view('admin.oderdetail.all_order_detail')->with('order_details', $order_details)->with('products', $products)->with('order_id', $order_id);
    }

    public function add(Request $request) {
        $this->AuthLogin();

        // Update order (order_total and payment_id)
        $product = Product::where('product_id', $request->product_id)->first();
        $order = Order::find($request->order_id);
        $order->order_total += $request->product_qty;
        $order->payment_id += $request->product_qty *  $product->product_price;
        $order->save();
        
        // Add product to order detail
        $data = OrderDetail::where([
            ['product_id', $request->product_id],
            ['order_id', $request->order_id]
            ])->first();
        if ($data == null) {
            $data = new OrderDetail;
            $data->order_id = $request->order_id;
            $data->product_id = $request->product_id;
            $data->product_name = $product->product_name;
            $data->product_price = $product->product_price;
            $data->product_sales_quantily = $request->product_qty;
        } else {
            $data->product_sales_quantily += $request->product_qty;
        }
        $data->save();
        Session::put('message','Thêm sản phẩm vào đơn hàng thành công');
        return Redirect::to('orderdetails/' . $request->order_id);
    }

    public function update(Request $request) {
        $this->AuthLogin();

        $order_detail = OrderDetail::find($request->order_details_id);
        $old_qty = $order_detail->product_sales_quantily;
        $new_qty = $request->qty;
        $other_qty = $new_qty - $old_qty;
        
        // Cap nhat lai so luong
        $order_detail->product_sales_quantily = $new_qty;
        $order_detail->save();
        
        // Update order (order_total and payment_id)
        $order = Order::find($order_detail->order_id);
        $order->order_total += $other_qty;
        $order->payment_id += $other_qty *  $order_detail->product_price;
        $order->save();
        Session::put('message', 'Cập nhật số lượng sản phẩm trong đơn hàng thành công');
        return Redirect::to('orderdetails/' . $order_detail->order_id);
    }

    public function delete(Request $request) {
        $this->AuthLogin();

        // Update order (order_total and payment_id)
        $order_detail = OrderDetail::find($request->order_details_id);
        $order = Order::find($request->order_id);
        $order->order_total -= $order_detail->product_sales_quantily;
        $order->payment_id -= $order_detail->product_sales_quantily *  $order_detail->product_price;
        $order->save();

        // Delete order detail
        OrderDetail::destroy($request->order_details_id);
        Session::put('message', 'Xóa sản phẩm khỏi đơn hàng thành công');
        return Redirect::to('orderdetails/' . $request->order_id);
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
}
