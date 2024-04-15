<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    public function user()
    {
        return view('login');
    }
    public function user_login(Request $request)
    {   
        $data = new Customer;
        $customer_email = $request -> customer_email;
        $customer_password = $request -> customer_password;
        $result = Customer::where('customer_email',$customer_email)->where('customer_password',$customer_password)->first();
        if ($result) {
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/');
        }else{
            Session::put('message','mat khau hoac tai khoan khong ton tai, lam on nhap lai');
            return Redirect::to('/login');
        }
    }
    public function logoutuser()
    {
        Session::put('customer_name', null);
        Session::put('customer_id', null);
        return Redirect::to('/');
    } 
    public function register_user(Request $request)
    {
        $data = new Customer;
        $data->customer_name = $request->customer_name;
        $data->customer_email = $request->customer_email;
        $data->customer_password = $request->customer_password;
        $data->customer_phone = $request->customer_phone;
        $data->save();
        Session::put('message','Đăng ký thành công');
        return view('login');
    }
}
