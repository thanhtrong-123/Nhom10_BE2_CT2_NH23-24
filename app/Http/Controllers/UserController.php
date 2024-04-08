<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Customer;
        $data->customer_name = $request->customer_name;
        $data->customer_email = $request->customer_email;
        $data->customer_password = $request->customer_password;
        $data->customer_phone = $request->customer_phone;
        $data->save();
        Session::put('message','Thêm user thành công');
        return view('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function UserLogin(Request $request)
    {   
        $data = new Customer;
        $customer_email = $request -> customer_email;
        $customer_password = md5($request -> customer_password);
        $result = Customer->where('customer_email',$customer_email)->where('customer_password',$customer_password)->first();
        if ($result) {
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/index');
        }else{
            Session::put('message','mat khau hoac tai khoan khong ton tai, lam on nhap lai');
            return Redirect::to('/login');
        }
    }
}
