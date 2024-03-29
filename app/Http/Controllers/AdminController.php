<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function admin()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {   
        $admin_email = $request -> admin_email;
        $admin_password = $request -> admin_password;
        $result = DB::table('admins')->where('username',$admin_email)->where('password',$admin_password)->first();
        if ($result) {
            Session::put('admin_name',$result->name);
            Session::put('admin_id', $result->id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','mat khau hoac tai khoan khong ton tai, lam on nhap lai');
            return Redirect::to('/admin');
        }
    }
    public function logout()
    {
        Session::put('name',null);
        Session::put('id', null);
        return Redirect::to('/admin');
    }
    public function add_product()
    {
        return view('admin.add_product');
    }
    public function all_product()
    {
        return view('admin.all_product');
    }
}
