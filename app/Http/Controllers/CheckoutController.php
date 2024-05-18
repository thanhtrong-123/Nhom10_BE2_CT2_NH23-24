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
        if($customer_id){
        $data = new Order;
        $data2 = new OrderDetail;
        $data->order_id = $request->order_id;
        $data->customer_id = $request->customer_id;
        $data->payment_id = $request->cart;
        $data->order_name = $request->order_name;
        $data->order_address = $request->order_address;
        $data->order_phone = $request->order_phone;
        $data->order_total = $request->product_quantity_checkout;
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