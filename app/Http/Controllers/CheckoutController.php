<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Providers\Cart;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;

class CheckoutController extends Controller
{
    
    
    
    public function add_checkout(Request $request)
    {
        //$this->AuthLogin();
        $customer_id = Session::get('customer_id');
        $cart = Session::get('cart');
        if($customer_id){
        $data = new Order;
        $total_quantity = array_sum(array_column($cart, 'qty'));
        $data->order_id = $request->order_id;
        $data->customer_id = $request->customer_id;
        $data->payment_id = $request->cart;
        $data->order_name = $request->order_name;
        $data->order_address = $request->order_address;
        $data->order_phone = $request->order_phone;
<<<<<<< Updated upstream
        $data->order_total = $total_quantity;
        $data->order_status = $request->has('order_status') ? $request->order_status : 0;
        $data->save();

       
        $order_id = $data->getKey();
        foreach ($cart as $key => $item){
            $data2 = new OrderDetail;
            $data2->order_details_id = $request->order_details_id;
=======
        foreach (Session::get('cart') as $key => $item){
            $cart = Session::get('cart');
            $data->order_total = array_sum(array_column($cart, 'qty'));
        }
        $data->order_total = $request->product_quantity_checkout;
        $data->order_status = $request->has('order_status') ? $request->order_status : 0;
        $data->save();
        $cart = Session::get('cart');
        $order_id = $data->getKey();
        foreach ($cart as $key => $item){
            $data2 = new OrderDetail;
>>>>>>> Stashed changes
            $data2->order_id = $order_id;
            $data2->product_id = $item['product_id'];
            $data2->product_name = $item['product_name'];
            $data2->product_price = $item['product_price'];
            $data2->product_sales_quantily = $item['qty'];
            $data2->save();
        }
        
        Session::put('message', 'Thanh toán đơn hàng thành công');
        return Redirect::to('dashboard_user');
        }else{  
            return Redirect::to('login')->send();
        }
    }
    public function checkcoupon(Request $request)
    {
        $data3 = $request -> all();
        $coupon = Coupon::where('coupon_code',$data3['coupon'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,

                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                    Session::put('coupon',$cou);
                }
                Session::save();
                return redirect()->back()->with('message','Thêm mã giảm giá thành công');
            }
        }else{
            return redirect()->back()->with('message','Mã giảm giá không đúng');
        }
    }
    public function del_coupon(Request $request)
    {
        $coupon = Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            return redirect()->back()->with('message','Xóa mã khuyến mãi thành công');
        }
    }
}